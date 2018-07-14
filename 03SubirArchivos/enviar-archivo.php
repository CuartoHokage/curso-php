<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Enviar Archivos</title>
</head>
<body>
	<!--  el enctype para adjuntar un fichero es multipar multipar/form-data-->
	<form name="enviar_archivo_frm" method=post enctype="multipart/form-data" action="subir-archivo.php">
		<input type="file" name="archivo_fls">
		<input type="submit" name="subir_btn" value="Subir Archivo">
	</form>
</body>
</html>