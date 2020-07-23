<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício 33</title>
	</head>
	<body>
		<form action="send_mail.php" method="POST">
			<fieldset style="width: 409px;">
				<legend><b>Formulário</b></legend>
				<label><b>Nome:</b></label> <input type="text" name="nome" size="32" placeholder="Digite seu nome"/> <br> <br>
				<label><b>Assunto:</b></label> <input type="text" name="assunto" size="30" placeholder="Digite o assunto"/> <br> <br>
				<label><b>Mensagem:</b></label>
				<textarea name="msg" rows="10" cols="55" placeholder="Escreva sua mensagem aqui..." style="margin-top: 2px;"></textarea>
				<input type="submit" value="Enviar" style="margin-top: 4px; cursor: pointer;">
				<input type="reset" value="Limpar" style="cursor: pointer;">
			</fieldset>
		</form>
	</body>
</html>