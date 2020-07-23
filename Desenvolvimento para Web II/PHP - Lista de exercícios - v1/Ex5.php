<?php
	$n = array(100, 110, 120, 130, 140, 150, 160, 170, 180, 200);
	$soma = 0;
	foreach($n as $x){
		if($x>100 and $x<200){
			echo "$x - ";
			++$soma;
		}
	}
	echo "<br> <br> <font size='4pt' face='Arial' color='Blue'> ✔A quantidade de número(s) entre 100 à 200 é: </font>";
	echo "<font size='4pt' face='Arial' color='Red'> <b> $soma </b> </font>";
?>