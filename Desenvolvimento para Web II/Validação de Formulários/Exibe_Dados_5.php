<?php
	ini_set('display_errors', 0);
	$preco = $_POST['preco'];
	$preco = str_replace(',', '.', $preco);
	
	if($preco!=null){
		if(is_numeric($preco)){
			$reais = number_format($preco, 2, ',', '');
			echo "<b>Preço:</b> R$ $reais";
		} else{
			echo "O campo <b>Preço</b> não pode conter letras!";
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	} else{
		echo "O campo <b>Preço</b> é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>