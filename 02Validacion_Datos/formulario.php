<!DOCTYPE html>
<html lang= "es">
<head>
	<title>Validación de datos con php</title>
	<meta charset="utf-8">
	<script>
		function validarDatosGet(){
			var verificar= true;
			if (!document.valida_datos_get_frm.nombre_txt.value) {
				alert("El campo nombre es requerido");
				document.valida_datos_get_frm.nombre_txt.focus();
				verificar=false;
			}else if(!document.valida_datos_get_frm.password_txt.value){
				alert("El campo password es requerido")
				document.valida_datos_get_frm.password_txt.focus();
				verificar=false;
			} else if (!document.valida_datos_get_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1].checked) {
				alert("El campo sexo es requerido");
				document.valida_datos_get_frm.sexo_rdo[0].focus();
				verificar=false;
			}
			if (verificar) {
				document.valida_datos_get_frm.submit();
			}
		}
		function validarDatosPost(){
			var verificar= true;
			if (!document.valida_datos_post_frm.nombre_txt.value) {
				alert("El campo nombre es requerido");
				document.valida_datos_post_frm.nombre_txt.focus();
				verificar=false;
			}else if(!document.valida_datos_post_frm.password_txt.value){
				alert("El campo password es requerido")
				document.valida_datos_post_frm.password_txt.focus();
				verificar=false;
			} else if (!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1].checked) {
				alert("El campo sexo es requerido");
				document.valida_datos_post_frm.sexo_rdo[0].focus();
				verificar=false;
			}
			if (verificar) {
				document.valida_datos_post_frm.submit();
			}
		}
		//cuando de la ventana todos los elementos de la pagina esten cargados ejecuta la siguiente funcion
		window.onload= function(){
			document.getElementById("enviar-get").onclick= validarDatosGet;
			document.getElementById("enviar-post").onclick= validarDatosPost;
		}
	</script>
</head>
<body>
	<?php
		// $_GET["error"]=null;
		error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
		if ($_GET["error"]=="si") {
			# code...
			echo "<span style='color:#F00; font-size:2em;'>Verifica tus datos</span>";
		}
	?>
	<hgroup><h1>Formulario de datos GET</h1></hgroup>
	<form name="valida_datos_get_frm" action="validar_datos.php" enctype="application/x-www-form-urlencoded" method="get">
		Ingresa tu nombre:
		<input type="text" name="nombre_txt">
		<br>
		<br>
		Ingresa tu Contraseña:
		<input type="password" name="password_txt">	
		<br>
		<br>
		<input type="radio" name="sexo_rdo" value="M">
		Masculino
		<input type="radio" name="sexo_rdo" value="F">
		Femenino
		<br>
		<br>
		<!-- El input de tipo hidden envia cosas ocultas en el formulario es decir el usuario no controla ese envio del hidden -->
		<input type="hidden" name="enviar_hdn" value="get">
		<input type="button" id="enviar-get" name="Enviar_btn" value="Enviar x Get">
	</form>
	<hgroup><h1>Formulario de datos POST</h1></hgroup>
	<form name="valida_datos_post_frm" action="validar_datos.php" enctype="application/x-www-form-urlencoded" method="post">
		Ingresa tu nombre:
		<input type="text" name="nombre_txt">
		<br>
		<br>
		Ingresa tu Contraseña:
		<input type="password" name="password_txt">	
		<br>
		<br>
		<input type="radio" name="sexo_rdo" value="M">
		Masculino
		<input type="radio" name="sexo_rdo" value="F">
		Femenino
		<br>
		<br>
		<!-- El input de tipo hidden envia cosas ocultas en el formulario es decir el usuario no controla ese envio del hidden -->
		<input type="hidden" name="enviar_hdn" value="post">
		<input type="button" id="enviar-post" name="Enviar_btn" value="Enviar x Post">
	</form>
</body>
</html>
<!-- Ver vídeo 5 de tutoriales php Subir archivos al servidor -->