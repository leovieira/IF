<?php
	function Saudacao_Hora ($nome, $hora, $minuto, $segundo){
		if ($hora >= 0 and $hora < 6) {
			return "Boa madrugada, $nome!";
		} else if ($hora >= 6 and $hora < 12) {
			return "Bom dia, $nome!";
		} else if ($hora >= 12 and $hora < 18) {
			return "Boa tarde, $nome!";
		} else if ($hora >= 18 and $hora <= 24) {
			return "Boa noite, $nome!";
		} else if ($hora > 24 or $hora < 0) {
			return "Hora inválida!";
		};
	}
	echo Saudacao_Hora ("Leonardo", 17, 30, 48);
?>