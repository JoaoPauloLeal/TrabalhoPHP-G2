<?php 
	session_start();
	

if (!empty($_GET["idM"])) 
{
	
	$idM = $_GET["idM"];
	include "../../cls/mensagemClass.php";
	include "../../cls/conexaoClass.php";

	$mensagem = new mensagemClass();
	$mensagem -> TrocaStatusMensagemEmp($idM);
	echo "<script>window.location='../index.php?adm=admE'</script>";
}
else
{
	echo "<script>window.location='../index.php'</script>";
}


?>