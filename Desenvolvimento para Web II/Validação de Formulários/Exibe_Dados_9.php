﻿<?php
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	
	if($senha1!=null){
		if($senha2!=null){
			if($senha1==$senha2){
				echo "<b>Senha:</b> $senha1";
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