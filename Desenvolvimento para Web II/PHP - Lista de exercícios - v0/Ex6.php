<?php
	$horas = 42;
	$horas_ex = 0;
	$bonus = 0;
	$valor = 0;
	
	if($horas<40){
		$valor = ($horas*15);
		echo "Horas totais trabalhadas: <b> $horas hrs </b> <br>";
		echo "Quantidade de horas extra: <b> 0 hrs </b> <br>";
		echo "Valor total do pagamento semanal: <b> R$ $valor,00 </b> <br>";
	}
	if($horas>40){
		$horas_ex = ($horas-40);
		$bonus = ((40*15)*0.1);
		$valor = ((30*$horas_ex)+(40*15)+($bonus));
		echo "Horas totais trabalhadas: <b> $horas hrs </b> <br>";
		echo "Quantidade de horas extra: <b> $horas_ex hrs </b> <br>";
		echo "Valor total do pagamento semanal: <b> R$ $valor,00 </b> <br>";
	}
?>