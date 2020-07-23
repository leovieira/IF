<!Doctype Html>
<html>
	<head>
		<title>Formulário</title>
	</head>
	<body>
		<form action="Exibe_Dados_6.php" method="POST">
		<b>Selecione:</b> <br>
		<input type="checkbox" name="cor[]" value="Vermelho" style="margin-top: 6px;"> Vermelho <br>
		<input type="checkbox" name="cor[]" value="Azul"> Azul <br>
		<input type="checkbox" name="cor[]" value="Amarelo"> Amarelo <br>
		<input type="checkbox" name="cor[]" value="Preto"> Preto <br>
		<input type="checkbox" name="cor[]" value="Laranja"> Laranja <br> <br>
		<input type="submit" value="Enviar" style="cursor: pointer;">
		<input type="reset" value="Limpar" style="cursor: pointer;">
		</form>
	</body>
</html>