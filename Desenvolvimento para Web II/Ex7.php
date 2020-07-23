<h3> Exemplo 1: </h3>
<?php
	$nome = "Felipe";
	$idade = 17;
	echo "<p> Eu sou $nome e tenho $idade anos! </p>";
?>
<h3> Exemplo 2: </h3>
<?php
	$var = 100;
	$var += 25; //Soma 25 em $var!
	echo $var++;
	echo $var;
?>
<h3> Outros: </h3>
<?php
	$var = 12;
	$var -= 2;
	$var *= 2;
	$var /= 4;
	$var %= 2;
	echo "O valor das atribuições é: $var <br> <br>";
	$lol = 2;
	echo ++$lol;
	echo --$lol;
	echo $lol++;
	echo $lol--;
?>