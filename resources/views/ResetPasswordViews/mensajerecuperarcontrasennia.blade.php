<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar contraseña</title>
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
              Recibimos una solicitud para restablecer la contraseña de tu cuenta en H20-ADMIN. Si no fuiste tú quien 
              realizó esta solicitud, puedes ignorar este mensaje.<br>

              Para restablecer tu contraseña, haz clic en el siguiente enlace:
            </p>
            <a href="http://sistemahorarioslaravel11.test/register/{{$correo}}/confirmar/">Restablecer mi contraseña</a>
            <p style="color: #000000; margin-bottom: 15px;">
               Este enlace es válido por [X minutos], así que asegúrate de hacerlo antes de que expire. 
               Si tienes problemas o necesitas asistencia adicional, no dudes en ponerte en contacto con 
               nuestro equipo de soporte a través de [correo electrónico de soporte].
            </p>
            <p style="font-variant: small-caps; color: #000000; font-weight: bold; margin-top: 20px;">
             Recuerda, nunca compartas tu contraseña con nadie y asegúrate de utilizar contraseñas seguras.
            </p>
          </div>
          <hr style="border: 0; border-top: 1px solid #000000; margin: 20px 0;">
        </td>
      </tr>
    </table>
  </body>
</html>