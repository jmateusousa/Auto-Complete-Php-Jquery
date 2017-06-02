<?php
$pesquisa=strtolower($_GET['nomefuncionario']);

$connect = mssql_connect("host", "user", "pass") or die("Não foi possivel a conexão com o servidor");
$db = mssql_select_db("PROTHEUS_11",$connect) or die("N?foi poss?l selecionar o banco de dados");
$sql = "SELECT RA_NOME FROM SRA010 WHERE RA_NOME LIKE '%".$pesquisa."%'";
$query = mssql_query($sql,$connect);

while($reg=mssql_fetch_array($query)){

		echo $reg["RA_NOME"]."|".$reg["RA_NOME"]."\n";
}
?>