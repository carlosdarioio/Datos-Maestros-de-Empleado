<?php



//FIN Notificando-----------------------------------------------------------------------------------------------------
require("./PHPMailer-master/PHPMailerAutoload.php"); //or select the proper destination for this file if your page is in some   //other folder
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cdfn333@gmail.com';                 // SMTP username
$mail->Password = 'Femosa01';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


/**/

/**/
//Correo y nombre de la persona a quien va dirigido
$mail->setFrom('cdfn33@gmail.com', 'Nombre');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('cdfn33@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Le an asignado llamada';
$mail->Body    = 'Visite la pagina para visualizar la nuevas tareas asignadas.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'El mensaje no pudo enviarse.';
    echo ' Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje Enviado';
}	

?>
