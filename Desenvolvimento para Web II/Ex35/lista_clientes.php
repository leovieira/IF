<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$db = "meubanco";
	$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
	$sql = "SELECT * FROM cliente ORDER BY nome";
	$rs = mysqli_query($conexao, $sql) or die('Não foi possível consultar os dados!');

	if(mysqli_num_rows($rs)>0){
		//Exibe os dados!
		while($reg = mysqli_fetch_assoc($rs)){
			echo "<font size='4pt' face='Verdana'> Dados Pessoais </font> <br>";
			echo "<hr size='2px' color='black' width='400px' align='left'>";
			echo "<b> Id: </b> $reg[id] <br>";
			echo "<b> Nome: </b> $reg[nome] <br>";
			echo "<b> E-mail: </b> $reg[email] <br>";
			echo "<b> Sexo: </b> $reg[sexo] <br> <br> <br>";

			echo "<font size='4pt' face='Verdana'> Endereço </font> <br>";
			echo "<hr size='2px' color='black' width='400px' align='left'>";
			echo "<b> Rua: </b> $reg[rua] <br>";
			echo "<b> Bairro: </b> $reg[bairro] <br>";
			echo "<b> Cidade: </b> $reg[cidade] <br>";
			echo "<b> Estado: </b> $reg[estado] <br>";
			echo "<b> CEP: </b> $reg[cep] <br> <br> <br>";

			echo "<font size='4pt' face='Verdana'> Observações </font> <br>";
			echo "<hr size='2px' color='black' width='400px' align='left'>";
			echo "$reg[observacoes]";
			echo "<br> <br> <br> <br> <br> <br>";
		}
	} else{
		echo "Não foi possível consultar os dados!";
	}
	mysqli_free_result($rs);
	mysqli_close($conexao);
?>