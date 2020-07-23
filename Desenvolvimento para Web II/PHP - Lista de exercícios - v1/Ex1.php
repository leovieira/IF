<!Doctype Html>
<html lang="Pt-BR">
	<head>
		<title> Exercício 01 </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$l = 4;
			$c = 3;
			echo "<table border='2px' width='650px'>";
			for($i=0; $i < $l; $i++){
				echo "<tr>";
				for($n = 0; $n < $c; $n++){
					echo "<td> ### </td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>