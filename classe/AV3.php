<?php

include("classe/conexao.php")
$consulta = "SELECT * FROM classs";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>

<html>
	<head>
	
	
	<meta charset="utf8">
	
	
	</head>

	<body>
	
		<table>
			<tr>
				<td>Classe</td>
				<td>Quantidade de vida</td>	
				<td>Quantidade de defesa</td>	
				<td>Quantidade de ataque</td>
			</tr>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td>echo $dado["Nome"];</td>
				<td>echo $dado["HP"];</td>	
				<td>echo $dado["DEFESA"];</td>	
				<td>echo $dado["ATAQUE"];</td>
			</tr>
			<?php }?>
			
		</table>
	
	</body>

</html>