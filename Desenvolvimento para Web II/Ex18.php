<?php
	function teste($num){
		if($num%2==0){
			return "<b>$num</b> é par!";
		}
		else{
			return "<b>$num</b> não é par!";
		}
	}
	echo teste(20);
	echo "<br>";
	echo teste(21);
	echo "<br>";
	echo teste(22);
?>