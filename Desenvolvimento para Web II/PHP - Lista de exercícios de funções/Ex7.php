<?php
	function Avalia_Numero($Num){
		if($Num>0){
			return "O número $Num é positivo!";
		}
		if($Num<0){
			return "O número $Num é negativo!";
		}
		if($Num==0){
			return "O número $Num é igual à zero!";
		}
	}
	echo Avalia_Numero(-2);
?>