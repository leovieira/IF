<?php
	define('host', 'localhost');
	define('user', 'root');
	define('pass', '');
	define('db', 'db_crud');

	$conexao = mysqli_connect(host, user, pass, db);

	if ($conexao) {
		mysqli_set_charset($conexao, 'utf8');
	}
?>