<?php
	ini_set('display_errors', 0);
	header('Content-Type: application/json; charset=utf-8');
	date_default_timezone_set("America/Sao_Paulo");

	$retorno = array();

	$retorno['erro'] = false;

	include_once("settings/conexao_db.php");

	if ($conexao) {
		if (isset($_GET['id_veiculo']) and isset($_GET['marca']) and isset($_GET['modelo']) and isset($_GET['placa']) and 
		isset($_GET['final_placa']) and isset($_GET['data_compra']) and isset($_GET['seguro']) and isset($_GET['descricao'])) {
			$id_veiculo = $_GET['id_veiculo'];
			$marca = $_GET['marca'];
			$modelo = $_GET['modelo'];
			$placa = strtoupper($_GET['placa']);
			$final_placa = (int) $_GET['final_placa'];
			$data_compra = $_GET['data_compra'];
			$seguro = $_GET['seguro'];
			$descricao = $_GET['descricao'];

			if ($_GET['marca'] != null and $_GET['marca'] != null and $_GET['modelo'] != null and $_GET['placa'] != null and 
			$_GET['final_placa'] !=null and $_GET['data_compra'] != null and $_GET['seguro'] != null and $_GET['descricao'] != null) {
				if (strlen($placa) == 8 and strlen($final_placa) == 1 and is_int($final_placa) and strlen($data_compra) == 10 and 
				($seguro == "sim" or $seguro == "nao")) {
					if ($placa_mask = explode('-', $placa)) {
						$placa_mask[0] = str_replace('A', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('B', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('C', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('D', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('E', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('F', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('G', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('H', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('I', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('J', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('K', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('L', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('M', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('N', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('O', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('P', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('Q', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('R', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('S', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('T', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('U', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('V', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('W', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('X', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('Y', 'X', $placa_mask[0]);
						$placa_mask[0] = str_replace('Z', 'X', $placa_mask[0]);

						$placa_mask[1] = str_replace('0', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('1', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('2', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('3', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('4', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('5', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('6', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('7', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('8', 'X', $placa_mask[1]);
						$placa_mask[1] = str_replace('9', 'X', $placa_mask[1]);

						if ($placa_mask[0] == "XXX" and $placa_mask[1] == "XXXX") {
							$data = explode('-', $data_compra);

							if (checkdate($data[1], $data[2], $data[0])) {
								$sql = "UPDATE veiculo SET marca='$marca', modelo='$modelo', placa='$placa', final_placa=$final_placa, data_compra='$data_compra', seguro='$seguro', descricao='$descricao' WHERE id_veiculo=$id_veiculo;";

								$rs = mysqli_query($conexao, $sql);

								if ($rs) {
									$retorno['erro'] = false;
								} else {
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
				} else {
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