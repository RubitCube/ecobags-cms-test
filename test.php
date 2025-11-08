<?php
$name="priya";
$email="support2@ciber.ae";
$flayera="callus.webp";
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->Mailer = "sendmail";
$mail->Host = "127.0.0.1";
$mail->FromName = $name;
$mail->From = $email;
$mail->AddAddress("support5@ciber.ae");
$mail->AddCC($email);
$mail->Subject = "Enquiry from www.alhadeedprinters.com :  ".$name;
$mail->AddEmbeddedImage($flayera,  "my-attach",  $flayera);
$mail->WordWrap = 50;
$mail->Body = $body;

if(!$mail->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
	echo "Message  sent";
}
?> 