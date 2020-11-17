<?php 
	$numero=0;
	$numero=$_POST['txtNumero'];
	$nombre="fulanito de tal";
	echo "<br>Numero: ". $numero;
	echo "<br>Nombre: ". $nombre;
	echo "<br>Numero del 1 al ".$numero. ": ";

	for ($i=1; $i <= $numero ; $i++) { 
		echo "<br>". $i;
	}
	if ($numero % 2== 0) {
		echo "<br>".$numero . "Es par";
	}else{
		echo "<br>". $numero. "Es impar";
	}	
	
 ?>