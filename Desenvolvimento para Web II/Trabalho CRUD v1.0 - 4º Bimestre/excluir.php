<?php
	if(isset($_GET['id'])){
		$server = "localhost";
		$user = "root";
		$pwd = "";
		$db = "db_crud";
		$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
		$sql = "DELETE FROM cadastro WHERE id=" . $_GET['id'] . ";";
		$rs = mysqli_query($conexao, $sql);
		if($rs!=false){
			echo "<script> alert('Os dados foram excluidos com sucesso!'); </script>";
			echo "<a href='exibe_dados.php' style='margin-left: 2px; font-size: 12pt; font-family: Arial;'><b>Deseja ver os dados?</b></a>";
		} else{
			echo "Não foi possível excluir os dados!";
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	}
?>