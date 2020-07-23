<?php
	ini_set('display_errors', 0);
	header('Content-Type: application/json; charset=utf-8');
	date_default_timezone_set("America/Sao_Paulo");

	$retorno = array();

	$retorno['erro'] = false;

	include_once("settings/conexao_db.php");

	if ($conexao) {
		if(isset($_GET['id'])){
			if ($_GET['id'] != null) {
				$id_veiculo = $_GET['id'];
				$sql = "DELETE FROM veiculo WHERE id_veiculo=" . $id_veiculo . ";";
				$rs = mysqli_query($conexao, $sql);
				if($rs){
					$retorno['erro'] = false;
				} else{
					$retorno['erro'] = true;
				}
			} else {
				$retorno['erro'] = true;
			}
		} else {
			$retorno['erro'] = true;
		}
	} else {
		$retorno['erro'] = true;
	}

	echo json_encode($retorno);

	if (isset($conexao)) {
		mysqli_close($conexao);
	}

	if (isset($rs)) {
		mysqli_free_result($rs);
	}
?>