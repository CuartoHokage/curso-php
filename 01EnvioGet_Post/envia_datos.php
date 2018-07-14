<?php
	if (isset($_GET["enviar_btn"])) {
		# code...
		echo "Se a enviado por el metodo get, los datos son: <br><br>El nombre es: ".$_GET["nombre_txt"]."<br>El password es: ".$_GET["password_txt"];
	}else if (isset($_POST["enviar_btn"])) {
		# code...
		echo "Se a enviado por el metodo post, los datos son: <br><br>El nombre es: ".$_POST["nombre_txt"]."<br>El password es: ".$_POST["password_txt"];
	}
?>
<!-- Ver Video 4 -->