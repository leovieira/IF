<?php
	$clientes = array('Leonardo' => array('CPF' => '757.224.981-73',
						'RG' => '9437592',
						'Telefone' => '(64) 3862-5233'),
					'Elias' => array('CPF' => '170.224.721-06',
						'RG' => '9348163',
						'Telefone' => '(64) 3536-1955'),
					'Gustavo' => array('CPF' => '524.491.801-09',
						'RG' => '8361073',
						'Telefone' => '(64) 3531-7331'),
					'Vitor' => array('CPF' => '203.013.691-35',
						'RG' => '1047395',
						'Telefone' => '(64) 3791-9755'),
					'Breno' => array('CPF' => '720.197.971-00',
						'RG' => '1234567',
						'Telefone' => '(64) 2936-5215')
					);
	foreach($clientes as $chave => $a){
		echo "$chave <br>";
		foreach($a as $b => $c){
			echo "$b: $c <br>";
		}
		echo "<br> <br>";
	}
?>