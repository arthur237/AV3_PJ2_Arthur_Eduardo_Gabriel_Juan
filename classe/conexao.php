<?php>

$host = "localhost";
$usuario = "root"
$senha = "";
$bd = "test";

$mysqli = new mysqli($host, $usuario,$senha,bd);

if($mysqli->connect_errno)
	echo "falha na conexão": (".mysqli->connect_errno") ".$mysqli->connect_errno";

?>