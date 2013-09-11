<?php

  include("class.phpmailer.php");
	 
//Creamos la instancia de la clase PHPMAiler
 $mail = new phpmailer();

//El método que usaremos es por SMTP
$mail->Mailer = "smtp";
// Los datos necesarios para enviar mediante SMTP
$mail->Host = "mail.klique.com.mx";
$mail->SMTPAuth = true;
$mail->Username = "web@klique.com.mx";
$mail->Password = "kl1qu3kl1qu3";
// Asignamos el From y el FromName para que el destinatario sepa quien
// envía el correo
$mail->CharSet = 'UTF-8';
$mail->From = $_POST['email']; 
$mail->FromName = $_POST['nombre'];
//Añadimos la dirección del destinatario
$mail->AddAddress('jorge@emprend.me');
//Asignamos el subject, el cuerpo del mensaje y el correo alternativo
$mail->Subject = "SOLICITUD DE INFORMACION";
$correo = $_POST['email']; 
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];

$cuerpo = "Nombre:  ".$nombre. "\n\n";
$cuerpo .= "Email: ".$correo. "\n\n";
$cuerpo .= "Asunto: ".$asunto. "\n\n";
$cuerpo .= "Mensaje: ".$mensaje. "\n";
 
$mail->Body = ($cuerpo);

if($mail->Send())
{
//Sacamos un mensaje de que todo ha ido correctamente.
echo "Mensaje enviado correctamente.";
}
else
{
//Sacamos un mensaje con el error.
echo "Ocurrió un error al enviar el correo electronico.";
echo "<br/><strong>Informacion:</strong><br/>".$mail-> ErrorInfo;
}
?>