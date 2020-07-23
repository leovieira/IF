<?php
	$vetor_1 = null;
	$vetor_2 = null;
	for($i=0; $i<50; $i++){
		$vetor_1[] = rand(0, 100);
		$vetor_2[] = rand(100, 200);
	}
	$vetor_3 = array_merge($vetor_1, $vetor_2);
	sort($vetor_3);
	foreach($vetor_3 as $value){
		echo "$value <br>";
	}
?>