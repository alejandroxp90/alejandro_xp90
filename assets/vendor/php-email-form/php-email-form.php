<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$message = $_POST['message'];

$header = 'From: '.$mail."\r\n";
$header = "X-Mailer: PHP/".phpversion()."\r\n";
$header = "Mime-Version: 1.0\r\n";
$header = "Mensaje: ".$_POST['message']."\r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por ".$name.",\r\n";
$mensaje .= "Su email es: ".$mail."\r\n";
$mensaje .= "Mensaje: ".$_POST['message']."\r\n";
$mensaje .= "Enviado el ".date('d/m/Y', time());
$mThanks = "<script>alert('Gracias ').$name</script>"

$from = 'alejandro_xp90@hotmail.com';

mail($from, $asunto, utf8_decode($message), $header);
//echo "<script>alert('Gracias por su mensaje' ")</script>";
header("Location:index.html");
?>