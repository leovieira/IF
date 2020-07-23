<?php
	ini_set('display_errors', 0);
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	if($nome!=null){
		echo "<b>Nome:</b> $nome <br>";
	} else{
		echo "O campo <b>Nome</b> é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
	if($email!=null){
		echo "<b>E-mail:</b> $email <br>";
	} else{
		echo "O campo <b>E-mail</b> é obrigatório! <br>";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>