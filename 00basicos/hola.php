<?php
echo('hola <br>');
echo "Hola <br> <h1>cruelmundo</h1>";

$nombre = "Jaime";
$apellido= "Paz";
echo $nombre."&nbsp".$apellido;

echo "<br> La variable \$suma tiene el valor de $nombre <br>";
$numero= 2;
$modulo= $numero % 2;

if ($modulo==0) {
	# code...
	echo "El número es par <br>";
}else{
	echo "El número es impar <br>";
}

for ($i=0; $i <=10 ; $i++) { 
	# code...
	echo $i."<br>";
}
//ver video número 3
?>
