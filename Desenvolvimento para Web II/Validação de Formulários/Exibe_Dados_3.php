<?php
	ini_set('display_errors', 0);
	$data_nac = $_POST['data'];
	
	if($data_nac!=null){
		$data = explode("/", $data_nac);
		$dia = $data[0];
		$mes = $data[1];
		$ano = $data[2];
		if(checkdate($mes, $dia, $ano)){
			echo "<b>Data de nacimento:</b> $data_nac <br>";
		} else{
			$data = explode("-", $data_nac);
			$dia = $data[0];
			$mes = $data[1];
			$ano = $data[2];
			if(checkdate($mes, $dia, $ano)){
				echo "<b>Data de nacimento:</b> $data_nac <br>";
			} else{
				$data = explode("|", $data_nac);
				$dia = $data[0];
				$mes = $data[1];
				$ano = $data[2];
				if(checkdate($mes, $dia, $ano)){
					echo "<b>Data de nacimento:</b> $data_nac <br>";
				} else{
					echo "A data informada é inválida!";
				}
			}
		}
	} else{
		echo "O campo <b>Data de nacimento</b> é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
?>