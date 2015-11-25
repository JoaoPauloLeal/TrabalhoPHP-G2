<?php 
	session_start();
	$id = $_SESSION["idVoluntario"];
if (!empty($_GET["st"])) 
{
	$st = $_GET["st"];
	include "../../cls/voluntarioClass.php";
	include "../../cls/conexaoClass.php";

	$voluntario = new voluntarioClass();
	$voluntario -> TrocaStatus($id, $st);
	echo "<script>window.location='../index.php'</script>";
}
else
{
	echo "<script>window.location='../index.php'</script>";
}


?>