<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$comentario = $_POST['comentario'];

	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
	$mensaje .= "Email: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['comentario'] . " \r\n\r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'contacto@cbr.cl';
	$asunto = 'Contacto a través de cbr.cl';

	mail($para, $asunto, utf8_decode($mensaje), $header);

	header("Location: index.html");
?>