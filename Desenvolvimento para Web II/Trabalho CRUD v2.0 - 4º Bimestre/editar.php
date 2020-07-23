<?php
	ini_set('display_errors', 0);
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set("America/Sao_Paulo");

	$retorno = array();

	$retorno['erro'] = false;

	include_once("settings/conexao_db.php");

	if ($conexao) {
		if(isset($_GET['id'])){
			if ($_GET['id'] != null) {
				$id_veiculo = $_GET['id'];
				$sql = "SELECT * FROM veiculo WHERE id_veiculo=" . $id_veiculo . ";";
				$rs = mysqli_query($conexao, $sql);
				if ($rs) {
					if (mysqli_num_rows($rs) > 0) {
						$reg = mysqli_fetch_assoc($rs);
						if ($reg) {
							$erro = false;
						}
					} else {
						$erro = true;
					}
				} else {
					$erro = true;
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
?>
<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Formulário de Edição</title>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap-CSS -->
		<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="src/css/styles.css">

		<!-- CSS -->
		<style type="text/css">
			body {
				background-color: rgb(214, 214, 214);
			}

			.erro_campo {
				color: #dc3545;
				display: none;
			}

			.alert {
				display: none;
			}
		</style>

		<!-- JQuery -->
		<script src="src/js/jquery-3.3.1.min.js"></script>

		<!-- JQuery-Mask -->
		<script src="src/js/jquery.mask.min.js"></script>

		<!-- Bootstrap-JS -->
		<script src="src/js/bootstrap.min.js"></script>

		<!-- JavaScript -->
		<script type="text/javascript">
			function openAlert(id_elemento) {
				var elemento = document.getElementById(id_elemento);
				$('html, body').animate({scrollTop:0}, 'slow');
				elemento.style.display = "block";
				setTimeout(function() {
					elemento.classList.remove('hidden');
					elemento.classList.add('show');
				}, 500);
			}

			function closeAlert(id_elemento) {
				var elemento = document.getElementById(id_elemento);
				elemento.classList.remove('show');
				elemento.classList.add('hidden');
				setTimeout(function() {
					elemento.style.display = "none";
				}, 500);
			}

			function validaDados(){
				var marca = document.getElementById("marca");
				var modelo = document.getElementById("modelo");
				var placa = document.getElementById("placa");
				var final_placa = document.getElementById("final_placa");
				var data_compra = document.getElementById("data_compra");
				var seguro = document.getElementById("seguro");
				var descricao = document.getElementById("descricao");
				var erro_campo_marca = document.getElementById("erro_campo_marca");
				var erro_campo_modelo = document.getElementById("erro_campo_modelo");
				var erro_campo_placa = document.getElementById("erro_campo_placa");
				var erro_campo_final_placa = document.getElementById("erro_campo_final_placa");
				var erro_campo_data_compra = document.getElementById("erro_campo_data_compra");
				var erro_seguro = document.getElementById("erro_seguro");
				var erro_campo_descricao = document.getElementById("erro_campo_descricao");
				var erro = false;

				if (marca.value == "") {
					marca.style.borderColor = "#dc3545";
					erro_campo_marca.style.display = "block";
					erro = true;
				} else {
					marca.style.borderColor = "#28a745";
					erro_campo_marca.style.display = "none";
				}

				if (modelo.value == "") {
					modelo.style.borderColor = "#dc3545";
					erro_campo_modelo.style.display = "block";
					erro = true;
				} else {
					modelo.style.borderColor = "#28a745";
					erro_campo_modelo.style.display = "none";
				}

				if (placa.value == "" || placa.value.length != 8) {
					placa.style.borderColor = "#dc3545";
					erro_campo_placa.style.display = "block";
					erro = true;
				} else {
					placa.style.borderColor = "#28a745";
					erro_campo_placa.style.display = "none";
				}

				if (final_placa.value == "" || final_placa.value.length != 1) {
					final_placa.style.borderColor = "#dc3545";
					erro_campo_final_placa.style.display = "block";
					erro = true;
				} else {
					final_placa.style.borderColor = "#28a745";
					erro_campo_final_placa.style.display = "none";
				}

				if (data_compra.value == "") {
					data_compra.style.borderColor = "#dc3545";
					erro_campo_data_compra.style.display = "block";
					erro = true;
				} else {
					data_compra.style.borderColor = "#28a745";
					erro_campo_data_compra.style.display = "none";
				}

				if (seguro.value == "------") {
					seguro.style.borderColor = "#dc3545";
					erro_seguro.style.display = "block";
					erro = true;
				} else {
					seguro.style.borderColor = "#28a745";
					erro_seguro.style.display = "none";
				}

				if (descricao.value == "") {
					descricao.style.borderColor = "#dc3545";
					erro_campo_descricao.style.display = "block";
					erro = true;
				} else {
					descricao.style.borderColor = "#28a745";
					erro_campo_descricao.style.display = "none";
				}

				if (erro == false) {	
					$.ajax({
						method: "GET",
						url: "processa_editar.php",
						data: { 
							id_veiculo: <?php if ($erro == false) { echo $reg['id_veiculo']; } ?>, 
							marca: marca.value, 
							modelo: modelo.value, 
							placa: placa.value, 
							final_placa: final_placa.value, 
							data_compra: data_compra.value, 
							seguro: seguro.value, 
							descricao: descricao.value 
						},
						success: function(retorno) {
									if (retorno['erro'] == false) {
										openAlert('alert-enviado');

										var seconds = document.getElementById("countdown").textContent;
										var countdown = setInterval(function() {
											seconds--;
											document.getElementById("countdown").textContent = seconds;
											if (seconds <= 0) clearInterval(countdown);
										}, 1000);

										setTimeout(function() {
											closeAlert('alert-enviado');
											window.location.href='exibe_dados.php';
										}, 6000);
									} else {
										openAlert('alert-erro');

										setTimeout(function() {
											closeAlert('alert-erro');
										}, 6000);
									}
								}
					});
				} else {
					openAlert('alert-erro-campo');

					setTimeout(function() {
						closeAlert('alert-erro-campo');
					}, 6000);
				}
			}
		</script>
	</head>
	<body>
		<div style="margin-top: 10px; margin-left: 10px;">
			<h3 style="color: #0069d9;">Trabalho CRUD - 4º Bimestre</h3>
			<h4 style="color: #28a745;">Técnico em Desenvolvimento de Sistemas Integrado ao Ensino Médio - 2º A</h4>
		<div> <br>
		<div class="container" style="max-width: 900px;">
			<div class="alert alert-danger alert-dismissible fade hidden" id="alert-erro-campo" role="alert">
				<strong>Todos</strong> os campos são obrigatórios!
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-erro-campo" onclick="closeAlert('alert-erro-campo');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="alert alert-success alert-dismissible fade hidden" id="alert-enviado" role="alert">
				Os dados foram atualizados com <strong>sucesso</strong>! Redirecionando a página em <span id="countdown">5</span>s...
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-enviado" onclick="closeAlert('alert-enviado');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="alert alert-danger alert-dismissible fade hidden" id="alert-erro" role="alert">
				<strong>Ops...</strong> algo deu errado!
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-erro" onclick="closeAlert('alert-erro');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="" method="GET" name="form_editar" onsubmit="return false;">
				<fieldset class="form-group">
					<legend>Editar Veículos</legend>
					<div class="form-row">
						<div class="col">
							<label>Marca:</label>
							<input type="text" name="marca" class="form-control" id="marca" placeholder="Land Rover" value="<?php if ($erro == false) { echo $reg['marca']; } ?>">
							<small class="form-text erro_campo" id="erro_campo_marca">Este campo é obrigatório!</small>
						</div>
						<div class="col">
							<label>Modelo:</label>
							<input type="text" name="modelo" class="form-control" id="modelo" placeholder="Range Rover Evoque" value="<?php if ($erro == false) { echo $reg['modelo']; } ?>">
							<small class="form-text erro_campo" id="erro_campo_modelo">Este campo é obrigatório!</small>
						</div>
					</div> <br>
					<div class="form-row">
						<div class="col">
							<label>Placa:</label>
							<input type="text" name="placa" class="form-control" id="placa" placeholder="PHP-1208" value="<?php if ($erro == false) { echo $reg['placa']; } ?>">
							<small class="form-text erro_campo" id="erro_campo_placa">Este campo é obrigatório!</small>
						</div>
						<div class="col">
							<label>Dígito final da placa:</label>
							<input type="text" name="final_placa" class="form-control" id="final_placa" placeholder="8" value="<?php if ($erro == false) { echo $reg['final_placa']; } ?>">
							<small class="form-text erro_campo" id="erro_campo_final_placa">Este campo é obrigatório!</small>
						</div>
					</div> <br>
					<div class="form-row">
						<div class="col">
							<label>Data da compra:</label>
							<input type="date" name="data_compra" class="form-control" id="data_compra" value="<?php if ($erro == false) { echo $reg['data_compra']; } ?>">
							<small class="form-text erro_campo" id="erro_campo_data_compra">Este campo é obrigatório!</small>
						</div>
						<div class="col">
							<label>Possui seguro:</label>
							<select name="seguro" class="form-control" id="seguro">
								<option>------</option>
								<?php
									if ($erro == false) {
										if ($reg['seguro'] == "sim") {
											echo '<option value="sim" selected>Sim</option>';
											echo '<option value="nao">Não</option>';
										} else if ($reg['seguro'] == "nao") {
											echo '<option value="sim">Sim</option>';
											echo '<option value="nao" selected>Não</option>';
										} else {
											echo '<option value="sim">Sim</option>';
											echo '<option value="nao">Não</option>';
										}
									}
								?>
							</select>
							<small class="form-text erro_campo" id="erro_seguro">Selecione uma opção diferente de "------"!</small>
						</div>
					</div> <br>
					<div class="form-group">
						<label>Descrição:</label> <br>
						<textarea name="descricao" class="form-control" id="descricao" cols="48" rows="8" placeholder="Potência: 240cv&#10;Torque: 34,7mkgf&#10;0 a 100 km/h: 7,6 segundos&#10;Velocidade máxima: 217 km/h"><?php if ($erro == false) { echo $reg['descricao']; } ?></textarea>
						<small class="form-text erro_campo" id="erro_campo_descricao">Este campo é obrigatório!</small>
					</div> <br>
					<button  class="btn btn-primary" onclick="validaDados();">Enviar</button>
					<button type="reset" class="btn btn-danger" id="btn_reset" style="margin-left: 6px;">Limpar</button>
					<button type="button" class="btn btn-outline-success" onclick="window.location.href='exibe_dados.php';" style="margin-left: 6px;">Deseja ver os dados?</button>
				</fieldset>
			</form>
		</div>

		<!-- JavaScript -->
		<script type="text/javascript">
			$('#placa').mask('SSS-0000');
			$('#final_placa').mask('0');
		</script>
	</body>
</html>
<?php
	if (isset($conexao)) {
		mysqli_close($conexao);
	}

	if (isset($rs)) {
		mysqli_free_result($rs);
	}
?>