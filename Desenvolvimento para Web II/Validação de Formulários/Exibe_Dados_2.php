<?php
	ini_set('display_errors', 0);
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	if($nome==null){
		echo "O campo <b>Nome</b> é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
	if($email==null){
		echo "O campo <b>E-mail</b> é obrigatório! <br>";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
	if($nome!=null and $email!=null){
		$verifica_email = explode('@', $email);
		if(count($verifica_email)!=1){
			if($email!='@'){
				if($verifica_email[0]!=null){
					if($verifica_email[1]!=null){
						echo "<b>Nome:</b> $nome <br>";
						echo "<b>E-mail:</b> $email <br>";
					} else{
						echo 'Insira uma parte depois de "@"! "' . $email . '" está incompleto.';
						echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
					}
				} else{
					echo 'Insira uma parte antes de "@"! "' . $email . '" está incompleto.';
					echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
				}
			} else{
				echo 'Insira uma parte antes e depois de "@"! "' . $email . '" está incompleto.';
				echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
			}
		} else{
			echo 'Inclua um "@" no endereço de e-mail! "' . $email . '" está incompleto.';
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	}
?>