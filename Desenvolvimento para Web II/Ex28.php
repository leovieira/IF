<?php
	$i = 0;
	$j = 0;
	for($i=0; $i<5; $i++){
		for($j=0; $j<5; $j++){
			$my_matriz[$i][$j] = rand(0, 100);
		}
	}
	function maior_num_matriz($matriz){
		$maior = 0;
		$qtd_l = count($matriz);
		$qtd_c = count($matriz[0]);
		echo "<h4> ## Matriz ## </h4>";
		for($i=0; $i<$qtd_l; $i++){
			for($j=0; $j<$qtd_c; $j++){
				if($matriz[$i][$j]>$maior){
					$maior = $matriz[$i][$j];
				}
				if($j==$qtd_c-1){
					echo $matriz[$i][$j];
				} else{
					echo $matriz[$i][$j] . "-";
				}
			}
			echo "<br>";
		}
		return "<br> O maior número na matriz é <b>$maior</b>!";
	}
	echo maior_num_matriz($my_matriz);
?>