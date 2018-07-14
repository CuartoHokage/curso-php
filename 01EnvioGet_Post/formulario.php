<!DOCTYPE html>
<html lang= "es">
<head>
	<title>Envío de datos por GET y POST</title>
	<meta charset="utf-8">
</head>
<body>
	<hgroup><h1>Formulario por el método GET</h1></hgroup>
	<form name="Envia-get_frm" action="envia_datos.php" method="GET" enctype="application/x-www-form-urlencoded">
		<label>Ingresa tu nombre</label>
		<input type="text" name="nombre_txt">
		<br>
		<br>
		<label>Ingresa tu password</label>
		<input type="password" name="password_txt">
		<br><br>
		<input type="submit" name="enviar_btn" value="Enviar-GET">
	</form>
	
	<hgroup><h1>Formulario por el método POST</h1></hgroup>
	<form name="Envia-post_frm" action="envia_datos.php" method="POST" enctype="application/x-www-form-urlencoded">
		<label>Ingresa tu nombre</label>
		<input type="text" name="nombre_txt">
		<br>
		<br>
		<label>Ingresa tu password</label>
		<input type="password" name="password_txt">
		<br><br>
		<input type="submit" name="enviar_btn" value="Enviar-POST">
	</form>
</body>
</html>
<!-- Ver Video 4 continuacion-->