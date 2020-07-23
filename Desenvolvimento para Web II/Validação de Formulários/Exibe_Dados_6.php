<?php
	ini_set('display_errors', 0);
	$cor = $_POST['cor'];
	
	if($cor!=null){
		echo "<b>Cores:</b> <br>";
		for($i=0; $i<count($cor); $i++){
			echo $cor[$i] . "<br>";
		}
	} else{
		echo "Pelo menos uma opção deve ser selecionada!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>