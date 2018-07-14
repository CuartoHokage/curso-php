<?php include("sesion.php");?>
Bievenido: 
<?php echo $_SESSION["usuario"];?>
<br><br>
Estas en otra una página segura con sesiones en php
<br><br>
<a href="archivo-protegido.php">Ir a otra página segura</a>
<br><br>
<a href="salir.php">Salir</a>