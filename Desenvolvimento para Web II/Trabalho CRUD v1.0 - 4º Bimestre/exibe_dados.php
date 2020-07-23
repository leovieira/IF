<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$db = "db_crud";
	$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
	$sql = "SELECT * FROM cadastro ORDER BY nome_titular";
	$rs = mysqli_query($conexao, $sql) or die('Não foi possível consultar os dados!');
?>
<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Exibe Dados</title>

		<!-- Verificar se o úsuario confirmou -->
		<script>
			function confirma(id){
				if(confirm("Deseja excluir os dados mesmo?")){
					document.location.href='excluir.php?id=' + id;
				}
			}
		</script>
	</head>
	<body>
		<h3>Trabalho CRUD - 4º Bimestre</h3>
		<h4>Técnico em Desenvolvimento de Sistemas Integrado ao Ensino Médio - 2º A</h4>

		<?php if(mysqli_num_rows($rs)>0){ ?>
		<table border="2px" width="60%" style="text-align: center;">
			<tr>
				<th>ID</th>
				<th>Nome do titular</th>
				<th>Banco</th>
				<th>Agência</th>
				<th>Número da conta</th>
				<th>Tipo da conta</th>
				<th>Ações</th>
			</tr>
			<?php
				//Exibe os dados!
				while($reg = mysqli_fetch_assoc($rs)){
					echo "<tr>";
					echo "<td>$reg[id]</td>";
					echo "<td>$reg[nome_titular]</td>";
					echo "<td>$reg[banco]</td>";
					echo "<td>$reg[agencia]</td>";
					echo "<td>$reg[num_conta]</td>";
					echo "<td>$reg[tipo_conta]</td>";
					echo "<td><a href='editar.php?id=" . $reg['id'] . "'>Editar</a>" . "&nbsp &nbsp &nbsp<a href='#' onclick='return confirma(" . $reg['id'] . ")'>Excluir</a></td>";
					echo "</tr>";
				}
			?>
		</table>
		<?php
			} else{
				echo "Nenhuma linha foi encontrada!";
			}
		?>
	</body>
</html>
<?php
	mysqli_free_result($rs);
	mysqli_close($conexao);
?>