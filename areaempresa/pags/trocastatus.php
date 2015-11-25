<?php 
	session_start();
	$id = $_SESSION["idEmpresa"];
if (!empty($_GET["st"])) 
{
	$st = $_GET["st"];
	include "../../cls/empresaClass.php";
	include "../../cls/conexaoClass.php";

	$empresa = new empresaClass();
	$empresa -> TrocaStatus($id, $st);
	echo "<script>window.location='../index.php'</script>";
}
else
{
	echo "<script>window.location='../index.php'</script>";
}


?>