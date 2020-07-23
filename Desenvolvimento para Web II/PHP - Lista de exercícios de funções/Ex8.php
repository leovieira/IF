<?php
	function Tabuada_Multiplicacao($num){
		for($i = 0; $i < 11; $i++) {
			echo "$num x $i=";
			echo $num*$i;
			echo "<br>";
		}
	}
	echo Tabuada_Multiplicacao(4);
?>