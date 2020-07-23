<?php
	ini_set('display_errors', 0);
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$estado_civil = $_POST['estado_civil'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$obs = $_POST['obs'];
	
	//Letra A
	$campos_nulos = array();
	if($nome==null){
		$campos_nulos[] = 'Nome';
	}
	if($email==null){
		$campos_nulos[] = 'E-mail';
	}
	if($sexo==null){
		$campos_nulos[] = 'Sexo';
	}
	if($estado_civil==null){
		$campos_nulos[] = 'Estado civil';
	}
	if($rua==null){
		$campos_nulos[] = 'Rua';
	}
	if($bairro==null){
		$campos_nulos[] = 'Bairro';
	}
	if($cidade==null){
		$campos_nulos[] = 'Cidade';
	}
	if($estado==null){
		$campos_nulos[] = 'Estado';
	}
	if($cep==null){
		$campos_nulos[] = 'CEP';
	}
	$qtd_campos_nulos = count($campos_nulos);
	if($qtd_campos_nulos>1){
		echo "Os campos ";
		foreach($campos_nulos as $key => $campo){
			if($key==0){
				echo "$campo";
			} 
			if($key>0 and $key<($qtd_campos_nulos-1)){
				echo ", $campo";
			}
			if($key==($qtd_campos_nulos-1)){
				echo " e $campo";
			}
		}
		echo " são obrigatórios!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
	if($qtd_campos_nulos==1){
		echo "O campo ";
		echo $campos_nulos[0];
		echo " é obrigatório!";
		echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
	}
	
	if($qtd_campos_nulos==0){
		//Letra B
		$verifica_email = explode('@', $email);
		if(count($verifica_email)!=1){
			if($email!='@'){
				if($verifica_email[0]!=null){
					if($verifica_email[1]!=null){
						//Letra C
						if($estado_civil!='Selecione...'){
							//Letra D
							$estado_mask = strtoupper($estado);
							$estado_mask = str_replace('A', 'X', $estado_mask);
							$estado_mask = str_replace('B', 'X', $estado_mask);
							$estado_mask = str_replace('C', 'X', $estado_mask);
							$estado_mask = str_replace('D', 'X', $estado_mask);
							$estado_mask = str_replace('E', 'X', $estado_mask);
							$estado_mask = str_replace('F', 'X', $estado_mask);
							$estado_mask = str_replace('G', 'X', $estado_mask);
							$estado_mask = str_replace('H', 'X', $estado_mask);
							$estado_mask = str_replace('I', 'X', $estado_mask);
							$estado_mask = str_replace('J', 'X', $estado_mask);
							$estado_mask = str_replace('K', 'X', $estado_mask);
							$estado_mask = str_replace('L', 'X', $estado_mask);
							$estado_mask = str_replace('M', 'X', $estado_mask);
							$estado_mask = str_replace('N', 'X', $estado_mask);
							$estado_mask = str_replace('O', 'X', $estado_mask);
							$estado_mask = str_replace('P', 'X', $estado_mask);
							$estado_mask = str_replace('Q', 'X', $estado_mask);
							$estado_mask = str_replace('R', 'X', $estado_mask);
							$estado_mask = str_replace('S', 'X', $estado_mask);
							$estado_mask = str_replace('T', 'X', $estado_mask);
							$estado_mask = str_replace('U', 'X', $estado_mask);
							$estado_mask = str_replace('V', 'X', $estado_mask);
							$estado_mask = str_replace('W', 'X', $estado_mask);
							$estado_mask = str_replace('X', 'X', $estado_mask);
							$estado_mask = str_replace('Y', 'X', $estado_mask);
							$estado_mask = str_replace('Z', 'X', $estado_mask);
							if($estado_mask=='XX'){
								$estados_br = array('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO');
								$estado_bool = false;
								foreach($estados_br as $sigla){
									if($sigla==$estado){
										$estado_bool = true;
									}
								}
								if($estado_bool==true){
									//Letra E
									$cep_mask = $cep;
									$cep_mask = str_replace('0', 'X', $cep_mask);
									$cep_mask = str_replace('1', 'X', $cep_mask);
									$cep_mask = str_replace('2', 'X', $cep_mask);
									$cep_mask = str_replace('3', 'X', $cep_mask);
									$cep_mask = str_replace('4', 'X', $cep_mask);
									$cep_mask = str_replace('5', 'X', $cep_mask);
									$cep_mask = str_replace('6', 'X', $cep_mask);
									$cep_mask = str_replace('7', 'X', $cep_mask);
									$cep_mask = str_replace('8', 'X', $cep_mask);
									$cep_mask = str_replace('9', 'X', $cep_mask);
									if($cep_mask=='XXXXX-XXX'){
										echo "<font size='4pt' face='Verdana'> Dados Pessoais </font> <br>";
										echo "<hr size='2px' color='black' width='400px' align='left'>";
										echo "<b> Nome: </b> $nome <br>";
										echo "<b> E-mail: </b> $email <br>";
										echo "<b> Sexo: </b> $sexo <br>";
										echo "<b> Estado civil: </b> $estado_civil <br> <br> <br>";
										
										echo "<font size='4pt' face='Verdana'> Endereço </font> <br>";
										echo "<hr size='2px' color='black' width='400px' align='left'>";
										echo "<b> Rua: </b> $rua <br>";
										echo "<b> Bairro: </b> $bairro <br>";
										echo "<b> Cidade: </b> $cidade <br>";
										echo "<b> Estado: </b> $estado <br>";
										echo "<b> CEP: </b> $cep <br> <br> <br>";
										
										echo "<font size='4pt' face='Verdana'> Observações </font> <br>";
										echo "<hr size='2px' color='black' width='400px' align='left'>";
										echo "$obs";
									} else{
										echo 'O campo "CEP" deve conter um CEP válido, no formato XXXXX-XXX, onde X é um número de 0 à 9!';
										echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
									}
								} else{
									echo "O estado digitado não pertence a nenhum estado brasileiro!";
								}
							} else{
								echo 'O campo "Estado" deve conter uma sigla com apenas duas letras, sem caractere especial!';
								echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
							}
						} else{
							echo 'O campo "Estado civil" deve conter uma opção diferente de "Selecione..."!';
							echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
						}
					} else{
						echo 'Insira uma parte depois de "@"! "' . $email . '" está incompleto.';
						echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
					}
				} else{
					echo 'Insira uma parte antes de "@"! "' . $email . '" está incompleto.';
					echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
				}
			} else{
				echo 'Insira uma parte antes e depois de "@"! "' . $email . '" está incompleto.';
				echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
			}
		} else{
			echo 'Inclua um "@" no endereço de e-mail! "' . $email . '" está incompleto.';
			echo '<br> <br> <button onclick="history.back()" style="cursor: pointer;">Voltar</button>';
		}
	}
?>