<?php
	$var = 20;
	if (($var%10)==0){
		echo "$var é divisível por 10! <br>";
	}
	if (($var%5)==0){
		echo "$var é divisível por 5! <br>";
	}
	if (($var%2)==0){
		echo "$var é divisível por 2! <br>";
	}
	else{
		echo "Não é divisivel por nenhum!";
	}
?>