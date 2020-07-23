<?php
	$num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	foreach($num as $Doctor_Who){
		echo $Doctor_Who;
		if($Doctor_Who%2 == 0){
			echo " - par <br>";
		}
		else{
			echo " - ímpar <br>";
		}
	}
?>