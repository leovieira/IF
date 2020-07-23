<?php
	$nome_titular = $_POST['nome_titular'];
	$banco = $_POST['banco'];
	$agencia = $_POST['agencia'];
	$num_conta = $_POST['num_conta'];
	if(isset($_POST['tipo_conta'])){
		$tipo_conta = $_POST['tipo_conta'];
	} else{
		$tipo_conta = null;
	}
	$erros = array();

	if($nome_titular==null){
		$erros[] = "O campo <b>Nome do titular</b> deve ser preenchido!";
	}
	if($banco=='---'){
		$erros[] = "O campo <b>Banco</b> deve ser diferente de <b>---</b>!";
	}
	if($agencia==null){
		$erros[] = "O campo <b>Agência</b> deve ser preenchido!";
	}
	if($num_conta==null){
		$erros[] = "O campo <b>Número da conta</b> deve ser preenchido!";
	}
	if($tipo_conta==null){
		$erros[] = "O campo <b>Tipo da conta</b> deve ser preenchido!";
	}

	if(count($erros)==0){
		$server = "localhost";
		$user = "root";
		$pwd = "";
		$db = "db_crud";
		$conexao = mysqli_connect($server, $user, $pwd, $db) or die('Não foi possível fazer a conexão! <br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>');
		$sql = "INSERT INTO cadastro(nome_titular, banco, agencia, num_conta, tipo_conta) 
		VALUES('$nome_titular', '$banco', '$agencia', '$num_conta', '$tipo_conta');";
		$rs = mysqli_query($conexao, $sql);
		if($rs!=false){
			echo "<script> alert('Os dados foram gravados com sucesso!'); </script>";
			echo "<a href='exibe_dados.php' style='margin-left: 2px; font-size: 12pt; font-family: Arial;'><b>Deseja ver os dados?</b></a>";
		} else{
			echo "Não foi possível gravar os dados!";
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	} else{
		if(count($erros)>1){
			foreach($erros as $key => $erro){
				if($key!=(count($erros)-1)){
					echo $erro . "<br> <br>";
				} else{
					echo $erro;
				}
			}
		} else{
			echo $erros[0];
		}
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>