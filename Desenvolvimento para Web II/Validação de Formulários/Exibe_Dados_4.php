<?php
	ini_set('display_errors', 0);
	$idade = $_POST['idade'];
	$idade_int = ($idade*1);
	
	if($idade!=null){
		if(is_numeric($idade)){
			if(is_int($idade_int)){
				echo "<b>Idade:<b> $idade";
			} else {
				echo "A idade informada não é um número inteiro!";
				echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
			}
		} else{
			echo "O campo <b>Idade</b> não pode conter letras!";
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	} else{
		echo "O campo <b>Idade</b> é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>