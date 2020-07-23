<?php
	$nome = $_POST['nome'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['msg'];
	$erros = array();

	if($nome==null){
		$erros[] = 'O campo <b>Nome</b> deve ser preenchido!';
	}
	if($assunto==null){
		$erros[] = 'O campo <b>Assunto</b> deve ser preenchido!';
	}
	if($msg==null){
		$erros[] = 'O campo <b>Mensagem</b> deve ser preenchido!';
	}

	if(count($erros)==0){
		$destinatario = 'leonardopaiva_ipora@hotmail.com';
		mail($destinatario, $assunto, $msg);
		echo "Mensagem enviada com sucesso!";
	} else{
		foreach($erros as $key => $erro){
			echo $erro . "<br>";
		}
		echo '<br><button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>