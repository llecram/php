<?php
	echo "hola desde ";
	$x = 18;
	$y = 12;
	echo $x + $y;
	$a ="Hola";
	$b= "marcos";
	echo $a.$b;
	echo "linea1\nlinea2<br>linea3";
	for($i=0;$i<10;$i++){
		echo "numero: ".$i."<br>";
	}
	$f = array(1,2,3,4,5,6);
	for($i=0;$i<6;$i++){
		echo "Numero: ".$x[$i]."<br>";
	}
	$z=array(
		"mama"=>"ana",
		"papa"=>"wis"
	);
	for($z as $progenitor=>$nombre){
		echo $progenitor."es"."nombre";
	}
?>
