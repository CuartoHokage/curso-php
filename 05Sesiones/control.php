<?php
	if ($_POST["usuario_txt"]=="Jaime" && $_POST["password_txt"]== "123") {
		# code...0
		#inicio la sesión
		session_start();
		//declaro variables de sesión
		$_SESSION["autentificado"]=true;
		$_SESSION["usuario"]= $_POST["usuario_txt"];

		header("Location: archivo-protegido.php");
	}else{
		header("Location: index.php?error=si");
	}
?>