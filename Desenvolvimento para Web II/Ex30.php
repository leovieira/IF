<?php
	function existe_array($valor){
		$array = array('Cor_1'=>"Azul", 'Cor_2'=>"Amarelo", 'Cor_3'=>"Verde", 'Cor_4'=>"Branco");
		if(array_search($valor, $array)){
			echo "O valor <b>'$valor'</b> existe no array, ";
			echo "e sua chave é <b>'" . array_search($valor, $array) . "'</b>!";
		} else{
			echo "O valor informado não existe no array!";
		}
	}
	echo existe_array("Verde");
?>