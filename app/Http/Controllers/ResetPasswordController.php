<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Mail;
use Hash;
use App\Mail\cambiarcontrasenniaMailable;

class ResetPasswordController extends Controller
{
    // Mostrar formulario para solicitar el restablecimiento de contraseña
    public function showResetForm(){
        return view('ResetPasswordViews.olvidosucontrasennia');
    }

    // Mostrar formulario de cambio de contraseña con el token de validación
    public function showResetFormWithToken($token){
        try {
            // Verificar si el token existe y obtener la fecha de expiración
            $res = DB::connection('mysql')
                ->table("usuario")
                ->select("token_expiracion")
                ->where("token_recuperacion", "=", $token)
                ->first();

            if ($res) {
                // Verificar si el token no ha expirado
                $fechaExpiracion = Carbon::parse($res->token_expiracion);
                $fechaActual = Carbon::now();

                if ($fechaExpiracion->greaterThan($fechaActual)) {
                    // Token válido, mostrar el formulario para cambiar la contraseña
                    return view('ResetPasswordViews.cambiarcontrasennia', [
                        'token' => $token
                    ]);
                } else {
                    // Token expirado
                    $MensajeError = "El enlace ha expirado";
                    return redirect(route('login'))
                        ->with('sessionCambiarContrasennia', 'false')
                        ->with('mensaje', $MensajeError);
                }
            } else {
                // Token incorrecto o no encontrado
                $MensajeError = "Enlace incorrecto o ha expirado";
                return redirect(route('login'))
                    ->with('sessionCambiarContrasennia', 'false')
                    ->with('mensaje', $MensajeError);
            }
        } catch (\Swift_TransportException $e) {
            // Error con las credenciales de correo
            $MensajeError = "Hubo un error con las credenciales de correo";
            return redirect(route('password.reset'))
                ->with('sessionCambiarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        } catch (\Exception $e) {
            // Otro error genérico
            $MensajeError = "Hubo un error en el servidor";
            return redirect(route('password.reset'))
                ->with('sessionCambiarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        }
    }

    // Enviar enlace de recuperación al correo electrónico
    public function sendResetLinkEmail(Request $request){
        $correo = $request->correo;

        try {
            // Verificar si el correo electrónico existe en la base de datos
            $res = DB::connection('mysql')
                ->table('usuarios')
                ->where("correo_electronico", "=", $correo)
                ->get();

            if (!$res->isEmpty()) {
                // Obtener datos del usuario
                $res = DB::connection('mysql')
                    ->table('usuario')
                    ->select("id", "nombre_completo")
                    ->where("correo_electronico", "=", $correo)
                    ->where('activo', '=', 1)
                    ->first();

                if ($res) {
                    $nombre = $res->nombre_completo;

                    // Generar token único y fecha de expiración
                    $token = Str::uuid()->toString();
                    $expiraEn = Carbon::now()->addMinutes(10);

                    // Insertar el token y fecha de expiración en la base de datos
                    DB::connection('mysql')
                        ->table('usuario')
                        ->where('correo_electronico', $correo)
                        ->update([
                            'token_recuperacion' => $token,
                            'token_expiracion' => $expiraEn,
                        ]);

                    // Enviar el correo con el token
                    Mail::to($correo)
                        ->send(new cambiarcontrasenniaMailable($nombre, $token));

                    // Mensaje de éxito
                    $MensajeError = "¡Listo! Revisa tu correo";
                    return redirect('/login')
                        ->with('sessionRecuperarContrasennia', 'true')
                        ->with('mensaje', $MensajeError)
                        ->with('token', $token);
                } else {
                    // Usuario no confirmado
                    $MensajeError = "Aún no confirmas tu correo";
                    return redirect(route('password.request'))
                        ->with('sessionRecuperarContrasennia', 'false')
                        ->with('mensaje', $MensajeError);
                }
            } else {
                // Correo no registrado
                $MensajeError = "Este correo no existe";
                return redirect(route('password.request'))
                    ->with('sessionRecuperarContrasennia', 'false')
                    ->with('mensaje', $MensajeError);
            }
        } catch (\Swift_TransportException $e) {
            // Error de transporte del correo
            $MensajeError = "Hubo un error con las credenciales de correo";
            return redirect(route('password.request'))
                ->with('sessionRecuperarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        } catch (\Exception $e) {
            // Otro error genérico
            $MensajeError = "Hubo un error en el servidor";
            return redirect(route('password.request'))
                ->with('sessionRecuperarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        }
    }

    // Restablecer la contraseña
    public function resetPassword(Request $request){
        $contrasennia = $request->contrasennia;
        $contraseniaCifrada = Hash::make($contrasennia);
        $token = $request->mytoken;

        try {
            // Actualizar la contraseña en la base de datos
            DB::connection('mysql')
                ->table('usuario')
                ->where('token_recuperacion', $token)
                ->update([
                    'contrasennia' => $contraseniaCifrada
                ]);

            // Mensaje de éxito
            $MensajeError = "Cambio de contraseña exitoso";
            return redirect(route('login'))
                ->with('sessionCambiarContrasennia', 'true')
                ->with('mensaje', $MensajeError);

        } catch (\Swift_TransportException $e) {
            // Error con las credenciales de correo
            $MensajeError = "Hubo un error con las credenciales de correo";
            return redirect(route('password.reset', ['token' => $token]))
                ->with('sessionCambiarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        } catch (\Exception $e) {
            // Otro error genérico
            $MensajeError = "Hubo un error en el servidor";
            return redirect(route('password.reset', ['token' => $token]))
                ->with('sessionCambiarContrasennia', 'false')
                ->with('mensaje', $MensajeError);
        }
    }
}
