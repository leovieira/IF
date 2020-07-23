<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$db = "meubanco";
	$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
	$sql = "SELECT * FROM cliente ORDER BY nome";
	$rs = mysqli_query($conexao, $sql) or die('Não foi possível consultar os dados!');
?>
<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<title>Lista de Clientes - Ex36</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
		<?php if(mysqli_num_rows($rs)>0){ ?>
		<table border="2px" width="100%" style="text-align: center;">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Sexo</th>
				<th>Rua</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>CEP</th>
				<th>Observações</th>
			</tr>
			<?php
				//Exibe os dados!
				while($reg = mysqli_fetch_assoc($rs)){
					echo "<tr>";
					echo "<td>$reg[id]</td>";
					echo "<td>$reg[nome]</td>";
					echo "<td>$reg[email]</td>";
					echo "<td>$reg[sexo]</td>";
					echo "<td>$reg[rua]</td>";
					echo "<td>$reg[bairro]</td>";
					echo "<td>$reg[cidade]</td>";
					echo "<td>$reg[estado]</td>";
					echo "<td>$reg[cep]</td>";
					echo "<td>$reg[observacoes]</td>";
					echo "</tr>";
				}
			?>
		</table>
		<?php
			} else{
				echo "Não foi possível consultar os dados!";
			}
		?>
	</body>
</html>
<?php
	mysqli_free_result($rs);
	mysqli_close($conexao);
?>