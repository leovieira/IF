<?php
	$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	$b = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29);
	$x = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	
	$x[0] = ($a[0]+$b[0]);
	$x[1] = ($a[1]+$b[1]);
	$x[2] = ($a[2]+$b[2]);
	$x[3] = ($a[3]+$b[3]);
	$x[4] = ($a[4]+$b[4]);
	$x[5] = ($a[5]+$b[5]);
	$x[6] = ($a[6]+$b[6]);
	$x[7] = ($a[7]+$b[7]);
	$x[8] = ($a[8]+$b[8]);
	$x[9] = ($a[9]+$b[9]);
	
	echo "<h4> ☯ Primero Vetor: <h4>";
	foreach($a as $n){
		echo " - $n";
	}
	echo "<h4> ☯ Segundo Vetor: <h4>";
	foreach($b as $n){
		echo " - $n";
	}
	echo "<h4> ☯ Terceiro Vetor (Soma): <h4>";
	foreach($x as $n){
		echo " - $n";
	}
?>