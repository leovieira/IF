<?php
	//Inclui a Biblioteca!
	include "biblioteca.inc.php";
	
	echo "<h3> Letra A </h3>";
	echo verifica_data(12, 8, 2002)."<br>";
	echo verifica_data(8, 7, 2009)."<br>";
	echo verifica_data(15, 6, 1966). "<br> <br> <br>";
	
	echo "<h3> Letra B </h3>";
	echo data_extenso_timestamp(1451516400)."<br>";
	echo data_extenso_timestamp(-468723600)."<br>";
	echo data_extenso_timestamp(1317765600)."<br> <br> <br>";
	
	echo "<h3> Letra C </h3>";
	echo data_extenso(31, 12, 2015)."<br>";
	echo data_extenso(14, 3, 1978)."<br>";
	echo data_extenso(18, 4, 1955)."<br>";
?>