<!Doctype Html>
<html>
	<head>
		<title>Formulário</title>
	</head>
	<body>
		<form action="exibe_dados.php" method="POST">
			<fieldset>
				<legend><b>Dados Pessoais</b></legend>
				<label>Nome:</label> <input type="text" name="nome" size="54"/> <br> <br>
				<label>E-mail:</label> <input type="text" name="email" size="35" placeholder="exemplo@dominio.com"/> <br> <br>
				<label>Sexo:</label> <input type="radio" value="Masculino" name="sexo"/> Masculino
				<input type="radio" value="Feminino" name="sexo"/> Feminino <br> <br>
				<label>Estado civil</label>
				<select name="estado_civil">
					<option>Selecione...</option>
					<option>Casado</option>
					<option>Solteiro</option>
					<option>Divorciado</option>
					<option>Viúvo</option>
				</select>
			</fieldset>
			<br>
			<fieldset>
				<legend><b>Endereço</b></legend>
				<label>Rua:</label> <input type="text" name="rua" size="56"/> <br> <br>
				<label>Bairro:</label> <input type="text" name="bairro" size="24"/> <br> <br>
				<label>Cidade:</label> <input type="text" name="cidade" size="32"/>
				<label style="margin-left: 30px;">Estado:</label> <input type="text" name="estado" placeholder="Ex: GO" size="4"/> <br> <br>
				<label>CEP:</label> <input type="text" name="cep" placeholder="xxxxx-xxx" size="18"/>
			</fieldset>
			<br>
			<fieldset>
				<legend><b>Observações</b></legend>
				<textarea name="obs" rows="10" cols="55" placeholder="Escreva sua mensagem aqui..."></textarea>
			</fieldset>
			<div style="width: 140px; height: 30px; border-style: solid; border-size: 1px; border-color: blue; margin-top: 6px;">
				<input type="submit" value="Enviar" style="margin-top: 4px; margin-left: 12px; cursor: pointer;">
				<input type="reset" value="Limpar" style="cursor: pointer;">
			</div>
		</form>
	</body>
</html>