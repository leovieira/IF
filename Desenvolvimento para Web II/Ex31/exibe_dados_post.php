<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$estado_civil = $_POST['estado_civil'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$obs = $_POST['obs'];
	
	echo "<font size='4pt' face='Verdana'> Dados Pessoais </font> <br>";
	echo "<hr size='2px' color='black' width='400px' align='left'>";
	echo "<b> Nome: </b> $nome <br>";
	echo "<b> E-mail: </b> $email <br>";
	echo "<b> Sexo: </b> $sexo <br>";
	echo "<b> Estado civil: </b> $estado_civil <br> <br> <br>";
	
	echo "<font size='4pt' face='Verdana'> Endereço </font> <br>";
	echo "<hr size='2px' color='black' width='400px' align='left'>";
	echo "<b> Rua: </b> $rua <br>";
	echo "<b> Bairro: </b> $bairro <br>";
	echo "<b> Cidade: </b> $cidade <br>";
	echo "<b> Estado: </b> $estado <br>";
	echo "<b> CEP: </b> $cep <br> <br> <br>";
	
	echo "<font size='4pt' face='Verdana'> Observações </font> <br>";
	echo "<hr size='2px' color='black' width='400px' align='left'>";
	echo "$obs";
?>