<?php
	for($i=0; $i<100; $i++){
		$vetor[$i] = rand(0, 1000);
	}
	foreach($vetor as $valor){
		echo "$valor <br>";
	}
?>