<?php
	//Inclui a biblioteca!
	include 'biblioteca.inc.php';
	
	//Função 01!
	echo "<h3> ☢ Função 01! </h3>";
	echo par_impar(20);
	echo "<br>";
	echo par_impar(21);
	echo "<br>";
	echo par_impar(22);
	
	//Função 02!
	echo "<br> <br> <h3> ☢ Função 02! </h3>";
	echo maior(20, 30);
	
	//Função 03!
	echo "<br> <br> <h3> ☢ Função 03! </h3>";
	echo "<div align='center' style='width:460px; height:24px; background-color:#b0e8e1'>";
	echo "<font size='4pt' face='Verdana' color='#0000ff'> O valor do imposto de renda é de: </font>";
	echo "<font size='4pt' face='Verdana' color='#00ff00'> R$ " . imposto_de_renda(3000) . "</font>";
	echo "</div>";
?>