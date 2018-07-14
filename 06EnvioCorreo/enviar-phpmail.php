<?php
$de= $_POST["de_txt"];
$para= $_POST["para_txt"];
$asunto= $_POST["asunto_txt"];
$mensaje= $_POST["mensaje_txa"];
$cabeceras= "MIME-Version: 1.0\r\n";
$cabeceras.= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras.= "From: $de \r\n";
$archivo= $_FILES["archivo_fls"]["tmp_name"];
$destino= $_FILES["archivo_fls"]["name"];


if (move_uploaded_file($archivo, $destino)) {
	# code...
	include_once("class.phpmailer.php");
	include_once("class.smtp.php");
	//onjeto de phpmailer
	$mail = new PHPMailer(); //creo un objeto de tipo PHPMailer
	$mail->IsSMTP(); //protocolo SMTP
	$mail->SMTPAuth = true;//autenticación en el SMTP
	$mail->SMTPSecure = "ssl";//SSL security socket layer
	$mail->Host = "smtp.gmail.com";//servidor de SMTP de gmail
	$mail->Port = 465;//puerto seguro del servidor SMTP de gmail
	$mail->From = $de; //Remitente del correo
	$mail->AddAddress($para);// Destinatario
	//dar permiso en gmail a aplicaciones menos seguras sino da un error
	$mail->Username = "ejemplo@gmail.com";//Aqui pon tu correo de gmail
	$mail->Password = "*******";//Aqui pon tu contraseña de gmail
	$mail->Subject = $asunto; //Asunto del correo
	$mail->Body = $mensaje; //Contenido del correo
	$mail->WordWrap = 50; //No. de columnas
	$mail->MsgHTML($mensaje);//Se indica que el cuerpo del correo tendrá formato html
	$mail->AddAttachment($destino); //accedemos al archivo que se subio al servidor y lo adjuntamos

	if ($mail->Send()) {//si se envio el correo phpmailer
		# code...
		$respuesta= "El mensaje se pudo enviar con la clase phpmailer";
	}else{
		$respuesta.= "Error: El mensaje no se pudo enviar con la clase phpmailer".$mail->ErrorInfo;
	}
}else{
	$respuesta= "Ocurrio un error :v al subir el archivo adjunto";
}
unlink($destino);
header("Location: formulario-php-mail.php?respuesta=$respuesta");
?>
