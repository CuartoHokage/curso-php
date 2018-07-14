<?php
	if (!$_COOKIE["idioma_solicitado"]) {
		# code...
		header("Location: pedir-idioma.php");

	}else if($_COOKIE["idioma_solicitado"]=="es"){
		header("Location: espanol.php");

	}else if ($_COOKIE["idioma_solicitado"]=="en") {
		# code...
		header("Location: ingles.php");
	}
?>
<!-- Ver video php 7 sesiones -->