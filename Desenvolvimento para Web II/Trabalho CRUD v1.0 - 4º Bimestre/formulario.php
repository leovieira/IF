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
			<form action="processa_form.php" method="POST">
				<label>Nome do titular:</label> <input type="text" name="nome_titular" size="36"> <br> <br>
				<label>Banco:</label>
				<select name="banco">
					<option>---</option>
					<option>Banco do Brasil</option>
					<option>Bradesco</option>
					<option>Caixa Econômica Federal</option>
					<option>Itaú</option>
				</select> <br> <br>
				<label>Agência:</label> <input type="text" name="agencia" size="19"> <br> <br>
				<label>Número da conta:</label> <input type="text" name="num_conta" size="28"> <br> <br>
				<label>Tipo da conta:</label>
				<input type="radio" name="tipo_conta" value="Conta Corrente"> Conta Corrente 
				<input type="radio" name="tipo_conta" value="Poupança"> Poupança <br> <br>
				<input type="submit" value="Enviar" style="cursor: pointer;">
			</form>
		</fieldset> <br>
		<a href="exibe_dados.php" style="margin-left: 2px; font-size: 12pt; font-family: Arial;"><b>Deseja ver os dados?</b></a>
	</body>
</html>