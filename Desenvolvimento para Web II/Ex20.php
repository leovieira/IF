<?php
	function  imposto_de_renda($sal){
		switch($sal){
			case ($sal<1787.77):
				return "Isento";
				break;
			case ($sal>1787.78 and $sal<2679.29):
				return (($sal*0.075)-134.08);
				break;
			case ($sal>2679.30 and $sal<3572.43):
				return (($sal*0.15)-335.03);
				break;
			case ($sal>3572.44 and $sal<4463.81):
				return (($sal*0.225)-602.96);
				break;
			case ($sal>4463.81):
				return (($sal*0.275)-826.15);
				break;
		}
	}
	echo "<div align='center' style='width:460px; height:24px; background-color:#b0e8e1'>";
	echo "<font size='4pt' face='Verdana' color='#0000ff'> O valor do imposto de renda é de: </font>";
	echo "<font size='4pt' face='Verdana' color='#00ff00'> R$ " . imposto_de_renda(3000) . "</font>";
	echo "</div>";
?>