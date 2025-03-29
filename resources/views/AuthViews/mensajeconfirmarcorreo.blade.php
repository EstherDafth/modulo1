<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Correo de confirmación</title>
  </head>
  <body style="font-family: Sans-serif; font-size: 12pt; color: #000000; margin: 0; padding: 0;">
    <table role="presentation" style="width: 100%; border-spacing: 0;">
      <tr>
        <td style="padding: 20px; text-align: center;">
          <h1 style="font-variant: small-caps; color: #000000; font-weight: bold; margin-bottom: 20px;">H20-Admin</h1>
          <hr style="border: 0; border-top: 1px solid #000000; margin: 20px 0;">
          <div style="padding: 40px 20px; background-color: #f9f9f9; border-radius: 5px;">
            <h2 style="font-size: 20px; margin-bottom: 20px;">Estimado/a {{$nombreCompleto}},</h2>
            <p style="color: #000000; margin-bottom: 15px;">
              Nos complace informarte que tu cuenta en H20-ADMIN ha sido activada correctamente. 
              Ahora puedes acceder a todos nuestros servicios y disfrutar de todas las funcionalidades disponibles.
            </p>
            <p style="color: #000000; margin-bottom: 20px;">
              Para comenzar, solo debes iniciar sesión con tu nombre de usuario y contraseña.
            </p>
            <a href="http://sistemahorarioslaravel11.test/register/{{$correo}}/confirmar/" 
               style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none; font-weight: bold; border-radius: 5px;">
              Acceder
            </a>
            <p style="font-variant: small-caps; color: #000000; font-weight: bold; margin-top: 20px;">
              Si tienes alguna pregunta o necesitas asistencia, no dudes en ponerte en contacto con nosotros a través de 
              [dirección de correo electrónico de soporte].
            </p>
          </div>
          <hr style="border: 0; border-top: 1px solid #000000; margin: 20px 0;">
        </td>
      </tr>
    </table>
  </body>
</html>
