<?php
	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$sexo = $_GET['sexo'];
	$estado_civil = $_GET['estado_civil'];
	$rua = $_GET['rua'];
	$bairro = $_GET['bairro'];
	$cidade = $_GET['cidade'];
	$estado = $_GET['estado'];
	$cep = $_GET['cep'];
	$obs = $_GET['obs'];
	
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