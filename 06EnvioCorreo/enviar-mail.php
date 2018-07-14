<?php
$de= $_POST["de_txt"];
$para= $_POST["para_txt"];
$asunto= $_POST["asunto_txt"];
$mensaje= $_POST["mensaje_txa"];
$cabeceras= "MIME-Version: 1.0\r\n";
$cabeceras.= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras.= "From: $de \r\n";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
	# code...
	$respuesta= "El mensaje a sido enviado :D";
}else{
	$respuesta= "Ocurrio un error :v";
}
header("Location: formulario-mail.php?respuesta=$respuesta")
?>
