<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Envío de correo con la función mail de php</title>
	<style>
		form{
			margin:1em auto;
			text-align: center;
		}
		span{
			color:#f60;
			font-size: 1.5em;
		}
	</style>
	<script type="text/javascript">
		function validarForm(){
			var verificar=true;
			var expRegEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

			if (!document.mail_frm.de_txt.value) {
				alert("El campo 'De' es requerido");
				document.mail_frm.de_txt.focus();
				verificar =false;
			}else if(!expRegEmail.exec(document.mail_frm.de_txt.value)){
				alert("El campo 'De' no es un correo correcto");
				document.mail_frm.de_txt.focus();
				verificar =false;
			}else if(!document.mail_frm.para_txt.value){
				alert("El campo 'para' no es un correo correcto");
				document.mail_frm.para_txt.focus();
				verificar =false;
			}else if(!expRegEmail.exec(document.mail_frm.para_txt.value)){
				alert("El campo 'para' no es un correo correcto");
				document.mail_frm.para_txt.focus();
				verificar =false;
			}else if(!document.mail_frm.asunto_txt.value){
				alert("El campo 'asunto' no es un correo correcto");
				document.mail_frm.asunto_txt.focus();
				verificar =false;
			}else if(!document.mail_frm.archivo_fls.value){
				alert("El campo 'archivo' es requerido");
				document.mail_frm.archivo_fls.focus();
				verificar =false;
			}else if(!document.mail_frm.mensaje_txa.value){
				alert("El campo 'mensaje' no es un correo correcto");
				document.mail_frm.mensaje_txa.focus();
				verificar =false;
			}
			if (verificar) {
				document.mail_frm.submit();
			}
		}
		window.onload= function(){
			document.mail_frm.enviar_btn.onclick= validarForm;
		}
	</script>
</head>
<body>
	<form name="mail_frm" action="enviar-phpmail.php" method="post" enctype="multipart/form-data">
		De: <input type="email" name="de_txt"><br><br>
		Para: <input type="email" name="para_txt"><br><br>
		Asunto: <input type="text" name="asunto_txt"><br><br>
		Adjuntar Archivo: <input type="file" name="archivo_fls"><br><br>
		Mensaje:<br> <textarea name="mensaje_txa">Enviado de supermail Jaime</textarea> <br><br>
		<input type="button" name="enviar_btn" value="Enviar">
		<?php
		error_reporting(E_ALL^ E_NOTICE ^ E_WARNING);
		if (isset($_GET["respuesta"])) {
			# code...
			echo "<span>".$_GET["respuesta"]."</span>";
		}
		?>
	</form>
</body>
</html>