<?php
	$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	$b = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
	$x = array($a[0], $b[0], $a[1], $b[1], $a[2], $b[2], $a[3], $b[3], $a[4], $b[4], $a[5], $b[5], $a[6], $b[6], $a[7], $b[7], $a[8], $b[8], $a[9], $b[9]);
	
	echo "<h4> ☯ Primero Vetor: <h4>";
	foreach($a as $n){
		echo " - $n";
	}
	echo "<h4> ☯ Segundo Vetor: <h4>";
	foreach($b as $n){
		echo " - $n";
	}
	echo "<h4> ☯ Terceiro Vetor (Intercalado): <h4>";
	foreach($x as $n){
		echo " - $n";
	}
?>