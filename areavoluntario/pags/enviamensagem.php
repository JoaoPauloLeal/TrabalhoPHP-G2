<?php 

session_start();

include "../../cls/conexaoClass.php";
include "../../cls/mensagemClass.php";

if (!empty($_POST['msg'])) 
{
	if (isset($_POST['msg'])) 
	{
		$msg = $_POST['msg'];
		$idempresa = $_SESSION['idEmp'];
		$idvoluntario = $_SESSION['idVol'];

		$mensagem = new mensagemClass();

		$mensagem -> InsertMsg($msg, $idempresa, $idvoluntario);
		echo "<script>window.location='../index.php?adm=admP'</script>";
	}
	echo "<script>window.location='../index.php?adm=admVol&admE=" . $_SESSION['idEmp'] . "'</script>";
}
echo "<script>window.location='../index.php?adm=admVol&admE=" . $_SESSION['idEmp'] . "'</script>";


?>