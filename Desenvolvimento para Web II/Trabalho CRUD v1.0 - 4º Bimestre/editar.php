<?php
	if(isset($_GET['id'])){
		$server = "localhost";
		$user = "root";
		$pwd = "";
		$db = "db_crud";
		$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
		$sql = "SELECT * FROM cadastro WHERE id=" . $_GET['id'] . ";";
		$rs = mysqli_query($conexao, $sql) or die('Não foi possível consultar os dados!');
		$reg = mysqli_fetch_assoc($rs);
	}
?>
<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Formulário</title>
	</head>
	<body>
		<h3>Trabalho CRUD - 4º Bimestre</h3>
		<h4>Técnico em Desenvolvimento de Sistemas Integrado ao Ensino Médio - 2º A</h4>

		<fieldset style="width:400px">
			<legend><font size="4pt" face="Comic Sans Ms" color="">Formulário de Cadastro</font></legend>
			<form action="processa_editar.php" method="POST">
				<input type="text" name="id" size="1" value="<?php if($_GET['id']){ echo $_GET['id']; } ?>" style="display: none;">
				<label>Nome do titular:</label> <input type="text" name="nome_titular" size="36" value="<?php if(isset($reg)){ echo $reg['nome_titular']; } ?>"> <br> <br>
				<label>Banco:</label>
				<select name="banco">
					<option>---</option>
					<option <?php if(isset($reg) and $reg['banco']=="Banco do Brasil"){ echo "selected"; } ?>>Banco do Brasil</option>
					<option <?php if(isset($reg) and $reg['banco']=="Bradesco"){ echo "selected"; } ?>>Bradesco</option>
					<option <?php if(isset($reg) and $reg['banco']=="Caixa Econômica Federal"){ echo "selected"; } ?>>Caixa Econômica Federal</option>
					<option <?php if(isset($reg) and $reg['banco']=="Itaú"){ echo "selected"; } ?>>Itaú</option>
				</select> <br> <br>
				<label>Agência:</label> <input type="text" name="agencia" size="19" value="<?php if(isset($reg)){ echo $reg['agencia']; } ?>"> <br> <br>
				<label>Número da conta:</label> <input type="text" name="num_conta" size="28" value="<?php if(isset($reg)){ echo $reg['num_conta']; } ?>"> <br> <br>
				<label>Tipo da conta:</label>
				<input type="radio" name="tipo_conta" value="Conta Corrente" <?php if(isset($reg) and $reg['tipo_conta']=="Conta Corrente"){ echo "checked"; } ?>> Conta Corrente 
				<input type="radio" name="tipo_conta" value="Poupança" <?php if(isset($reg) and $reg['tipo_conta']=="Poupança"){ echo "checked"; } ?>> Poupança <br> <br>
				<input type="submit" value="Enviar" style="cursor: pointer;">
			</form>
		</fieldset> <br>
		<a href="exibe_dados.php" style="margin-left: 2px; font-size: 12pt; font-family: Arial;"><b>Deseja ver os dados?</b></a>
	</body>
</html>