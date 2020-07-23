<?php
	function par_impar($num){
		if($num%2==0){
			return "<b>$num</b> é par!";
		}
		else{
			return "<b>$num</b> não é par!";
		}
	}

	function maior($a, $b){
		if($a>$b){
			return "<b>$a</b> é maior que <b>$b</b>!";
		}
		else{
			return "<b>$b</b> é maior que <b>$a</b>!";
		}
	}

	function  imposto_de_renda($sal){
		switch($sal){
			case ($sal<1787.77):
				return "Isento";
				break;
			case ($sal>1787.78 and $sal<2679.29):
				return (($sal*0.075)-134.08);
				break;
			case ($sal>2679.30 and $sal<3572.43):
				return (($sal*0.15)-335.03);
				break;
			case ($sal>3572.44 and $sal<4463.81):
				return (($sal*0.225)-602.96);
				break;
			case ($sal>4463.81):
				return (($sal*0.275)-826.15);
				break;
		}
	}

	function verifica_data($d, $m, $a){
		$r = checkdate($m, $d, $a);
		if($r == true){
			return "Data Válida!";
		}
		else{
			return "Data Inválida";
		}
	}
	
	function data_extenso_timestamp($timestamp){
		$d = date("d", $timestamp);
		$m = date("m", $timestamp);
		$a = date("Y", $timestamp);
		$mes_extenso = "";
		
		switch($m){
			case 1:
				$mes_extenso = "Janeiro";
				break;
			case 2:
				$mes_extenso = "Fevereiro";
				break;
			case 3:
				$mes_extenso = "Março";
				break;
			case 4:
				$mes_extenso = "Abril";
				break;
			case 5:
				$mes_extenso = "Maio";
				break;
			case 6:
				$mes_extenso = "Junho";
				break;
			case 7:
				$mes_extenso = "Julho";
				break;
			case 8:
				$mes_extenso = "Agosto";
				break;
			case 9:
				$mes_extenso = "Setembro";
				break;
			case 10:
				$mes_extenso = "Outubro";
				break;
			case 11:
				$mes_extenso = "Novembro";
				break;
			case 12:
				$mes_extenso = "Dezembro";
				break;
			default:
				$mes_extenso = "Mês Inválido!";
				break;
		}
		return "$d de $mes_extenso de $a";
	}
	
	function data_extenso($d, $m, $a){
		$timestamp = mktime(0, 0, 0, $m, $d, $a);
		$dia = date("d", $timestamp);
		$mes = date("m", $timestamp);
		$ano = date("Y", $timestamp);
		$mes_extenso = "";
		
		switch($mes){
			case 1:
				$mes_extenso = "Janeiro";
				break;
			case 2:
				$mes_extenso = "Fevereiro";
				break;
			case 3:
				$mes_extenso = "Março";
				break;
			case 4:
				$mes_extenso = "Abril";
				break;
			case 5:
				$mes_extenso = "Maio";
				break;
			case 6:
				$mes_extenso = "Junho";
				break;
			case 7:
				$mes_extenso = "Julho";
				break;
			case 8:
				$mes_extenso = "Agosto";
				break;
			case 9:
				$mes_extenso = "Setembro";
				break;
			case 10:
				$mes_extenso = "Outubro";
				break;
			case 11:
				$mes_extenso = "Novembro";
				break;
			case 12:
				$mes_extenso = "Dezembro";
				break;
			default:
				$mes_extenso = "Mês Inválido!";
				break;
		}
		return "$dia de $mes_extenso de $ano";
	}
	
	function gera_decimal_aleatorio($min, $max, $casas){
		$str1 = rand($min, $max);
		$str2 = null;
		for($i=0; $i<$casas; $i++){
			$str2 .= rand(0, 9);
		}
		if($casas>0){
			echo $str1 . ',' . $str2;
		}
		else{
			echo $str1;
		}
	}
	
	function formata_reais($num){
		return 'R$ ' . number_format($num, 2, ',', '.');
	}
	
	function oculta_vogais($text){
		$text = str_replace('A', '?', $text);
		$text = str_replace('a', '?', $text);
		$text = str_replace('E', '?', $text);
		$text = str_replace('e', '?', $text);
		$text = str_replace('I', '?', $text);
		$text = str_replace('i', '?', $text);
		$text = str_replace('O', '?', $text);
		$text = str_replace('o', '?', $text);
		$text = str_replace('U', '?', $text);
		$text = str_replace('u', '?', $text);
		return $text;
	}
	
	function inverte($text){
		$text_x = '';
		$cont = strlen($text);
		for($i=-1; $i>=-$cont; $i--){
			$text_x .= substr($text, $i, 1);
		}
		return $text_x;
	}
?>