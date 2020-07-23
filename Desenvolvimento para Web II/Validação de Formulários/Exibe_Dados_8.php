<?php
	ini_set('display_errors', 0);
	$turno = $_POST['turno'];
	
	if($turno!=null){
		echo "<b>Turno:</b> $turno";
	} else{
		echo "Uma opção deve ser selecionada!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>