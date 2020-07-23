<?php
	ini_set('display_errors', 0);
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set("America/Sao_Paulo");

	include_once("settings/conexao_db.php");

	$erro = false;

	if ($conexao) {
		$sql = "SELECT * FROM veiculo ORDER BY id_veiculo;";
		$rs = mysqli_query($conexao, $sql);
		if ($rs) {
			if (mysqli_num_rows($rs) > 0) {
				$erro = false;
			} else {
				$erro = true;
			}
		} else {
			$erro = true;
		}
	} else {
		$erro = true;
	}
?>
<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Exibe Dados</title>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap-CSS -->
		<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="src/css/styles.css">

		<!-- CSS -->
		<style type="text/css">
			body {
				background-color: rgb(214, 214, 214);
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

			function excluiItem(id_veiculo) {
				if(confirm("Deseja mesmo excluir os dados?")){
					$.ajax({
						method: "GET",
						url: "excluir.php",
						data: { 
							id: id_veiculo 
						},
						success: function(retorno) {
									if (retorno['erro'] == false) {
										openAlert('alert-excluido');

										var seconds = document.getElementById("countdown").textContent;
										var countdown = setInterval(function() {
											seconds--;
											document.getElementById("countdown").textContent = seconds;
											if (seconds <= 0) clearInterval(countdown);
										}, 1000);

										setTimeout(function() {
											closeAlert('alert-excluido');
											window.location.reload();
										}, 6000);
									} else {
										openAlert('alert-erro-excluir');

										setTimeout(function() {
											closeAlert('alert-erro-excluir');
										}, 6000);
									}
								}
					});
				}
			}
		</script>
	<body>
		<div style="margin-top: 10px; margin-left: 10px;">
			<h3 style="color: #0069d9;">Trabalho CRUD - 4º Bimestre</h3>
			<h4 style="color: #28a745;">Técnico em Desenvolvimento de Sistemas Integrado ao Ensino Médio - 2º A</h4>
		<div> <br>
		<div class="container" style="max-width: 1200px;">
			<div class="alert alert-success alert-dismissible fade hidden" id="alert-excluido" role="alert">
				Dados excluídos com <strong>sucesso</strong>! Recarregando a página em <span id="countdown">5</span>s...
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-excluido" onclick="closeAlert('alert-excluido');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="alert alert-danger alert-dismissible fade hidden" id="alert-erro-excluir" role="alert">
				<strong>Não</strong> foi possível exluir!
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-erro-excluir" onclick="closeAlert('alert-erro-excluir');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php if ($erro == false) { ?>
			<table class="table table-dark" style="text-align: center;">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Placa</th>
						<th scope="col">Dígito Final da Placa</th>
						<th scope="col">Data da Compra</th>
						<th scope="col">Possui Seguro</th>
						<th scope="col">Descrição</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while ($reg = mysqli_fetch_assoc($rs)) {
						echo "<tr>";

						echo '<th scope="row">';
						echo $reg['id_veiculo'];
						echo "</th>";

						echo "<td>";
						echo $reg['marca'];
						echo "</td>";

						echo "<td>";
						echo $reg['modelo'];
						echo "</td>";

						echo "<td>";
						echo $reg['placa'];
						echo "</td>";

						echo "<td>";
						echo $reg['final_placa'];
						echo "</td>";

						echo "<td>";

						if ($novaData = date_format(date_create($reg['data_compra']), 'd/m/y')) {
							echo $novaData;
						} else {
							echo $reg['data_compra'];
						}

						echo "</td>";

						echo "<td>";

						if ($reg['seguro'] == "sim") {
							echo "Sim";
						} else if ($reg['seguro'] == "nao") {
							echo "Não";
						} else {
							$reg['seguro'];
						}

						echo "</td>";

						echo "<td>";
						echo $reg['descricao'];
						echo "</td>";

						echo "<td>";
				?>

						<button type="button" class="btn btn-outline-success" onclick="window.location.href='editar.php?id=<?php echo $reg['id_veiculo']; ?>';">
							Editar
						</button>
						<button type="button" class="btn btn-outline-danger" style="margin-left: 5px;" onclick="excluiItem(<?php echo $reg['id_veiculo']; ?>);">
							Excluir
						</button>

				<?php
						echo "</td>";

						echo "</tr>";
					}
				?>
				</tbody>
			</table>
			<?php
				} else{
			?>
			<div class="alert alert-danger alert-dismissible fade hidden" id="alert-erro" role="alert">
				<strong>Ops...</strong> algo deu errado!
				<button type="button" class="close" aria-label="Fechar" data-dismiss="alert-erro" onclick="closeAlert('alert-erro');">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!-- JavaScript -->
			<script type="text/javascript">

			</script>
			<?php
				}
			?>

			<button type="button" class="btn btn-primary" onclick="window.location.href='index.php';">
				Deseja voltar para o formulário?
			</button>
		</div>

		<!-- JavaScript -->
		<script type="text/javascript">
			openAlert('alert-erro');

			setTimeout(function() {
				closeAlert('alert-erro');
			}, 6000);
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