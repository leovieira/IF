<?php
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$tem_numero = false;
	
	if($senha1!=null){
		if($senha2!=null){
			if($senha1==$senha2){
				$senha_min = mb_strtolower($senha1, 'utf-8');
				if($senha1!=$senha_min){
					for($i=0; $i<strlen($senha1); $i++){
						if(is_numeric($senha1{$i})){
							$tem_numero = true;
						}
					}
					if($tem_numero==true){
						echo "<b>Senha:</b> $senha1";
					} else{
						echo "A senha deve conter pelo menos um número!";
						echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
					}
				} else{
					echo "A senha deve conter pelo menos um caractere em maiúsculo!";
					echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
				}
			} else{
				echo "A senha digitada está errada!";
				echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
			}
		} else{
			echo "Confirme a senha!";
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	} else{
		echo "Digite uma senha!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>