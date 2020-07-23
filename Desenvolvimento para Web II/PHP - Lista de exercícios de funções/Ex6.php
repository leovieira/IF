<?php
	function Saudacao_Sexo($pessoa, $sexo){
		if($sexo == "Feminino"){
			echo "Seja bem-vinda, $pessoa!";
		}
		else if($sexo == "Masculino") {
			echo "Seja bem-vindo, $pessoa!";
		}
	}	
	echo Saudacao_Sexo("Maria", "Feminino");
?>