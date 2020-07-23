<?php
	ini_set('display_errors', 0);
	$cor = $_POST['cor'];
	
	if(count($cor)==5){
		echo "<b>Cores:</b> <br>";
		for($i=0; $i<count($cor); $i++){
			echo $cor[$i] . "<br>";
		}
	} else{
		echo "Todas as opções devem ser selecionadas!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>