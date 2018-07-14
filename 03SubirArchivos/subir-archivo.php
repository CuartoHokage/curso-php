<?php
	// cuando mandamos un archivo crea una variable global $_FILES
	// cuando se envvian variables se generan 5 propiedades
	//name, type, tmp_name, error, size
	// Pd no imprimir esto en pantalla
	foreach ($_FILES["archivo_fls"] as $clave => $valor) {
		# code...
		echo "Propiedad: $clave --- Valor: $valor <br>";
	}
	// subir fichero al servidor
	$archivo= $_FILES["archivo_fls"]["tmp_name"];
	$destino= "archivos/".$_FILES["archivo_fls"]["name"];


	if ($_FILES["archivo_fls"]["type"]=="image/png") {
		# code...
		//funcion que permite subir los ficheros al servidor
		//move_uploaded_file(archivotemporal, ruta);
		move_uploaded_file($archivo, $destino);
		echo "Archivo subido";
	}else{
		echo "Solo se admiten archivos de tipo imagen <br> <a href=\"enviar-archivo.php\">Regresar a inicio</a>";
	}
?>
<!-- Ver video 6 php Cookies -->