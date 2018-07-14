<?php
	$nombre= "Jaime";
	$password= "Paz";
	//isset determina si la variable a sido creada
	if (isset($_GET["enviar_hdn"])) {
		# code...
		if ($nombre==$_GET["nombre_txt"]&& $password==$_GET["password_txt"]) {
			# code...
			echo "El nombre que ingresaste por get es ".$_GET["nombre_txt"].".<br>El password que ingresas por GET es ".$_GET["password_txt"].". <br>El sexo que seleccionaste por GET es ".$_GET["sexo_rdo"].".";
		}else{
			header("Location: formulario.php?error=si");
		}
	}else if (isset($_POST["enviar_hdn"])) {
		# code...
		if ($nombre==$_POST["nombre_txt"]&& $password==$_POST["password_txt"]) {
			# code...
			echo "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].".<br>El password que ingresas por POST es ".$_POST["password_txt"].". <br>El sexo que seleccionaste por POST es ".$_POST["sexo_rdo"].".";
		}else{
			header("Location: formulario.php?error=si");
		}
	}
?>
<!-- fddgdgfd -->