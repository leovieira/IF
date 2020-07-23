<?php
	function teste($a, $b){
		if($a>$b){
			return "<b>$a</b> é maior que <b>$b</b>!";
		}
		else{
			return "<b>$b</b> é maior que <b>$a</b>!";
		}
	}
	echo teste(20, 30);
?>