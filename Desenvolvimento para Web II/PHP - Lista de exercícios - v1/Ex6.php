<?php
	$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	$soma = 0;
	$min = 1;
	$max = 0;
	$media = 0;
	echo "<font size='3pt' face='Arial' color='Red'> <b> ☠ </b> </font> <font size='3pt' face='Arial' color='Blue'> O vetor é: </font>";
	foreach($a as $n){
		echo " - $n";
		$soma += $n;
		if ($max < $n){
			$max = $n;
		}
		if ($min > $n){
			$min = $n;
		}
	}
	$media = ($soma/10);
	echo "<br> <br> <font size='3pt' face='Arial' color='Red'> <b> ☠ </b> </font>";
	echo "<font size='3pt' face='Arial' color='Blue'> O maior número do vetor é: </font> $max <br> <br>";
	echo "<font size='3pt' face='Arial' color='Red'> <b> ☠ </b> </font>";
	echo "<font size='3pt' face='Arial' color='Blue'> O menor número do vetor é: </font> $min <br> <br>";
	echo "<font size='3pt' face='Arial' color='Red'> <b> ☠ </b> </font>";
	echo "<font size='3pt' face='Arial' color='Blue'> A média do vetor é: </font> $media";
?>