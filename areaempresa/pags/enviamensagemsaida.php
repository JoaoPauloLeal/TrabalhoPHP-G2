<?php 

session_start();

include "../../cls/conexaoClass.php";
include "../../cls/mensagemClass.php";

if (!empty($_POST['msg'])) 
{
	if (isset($_POST['msg'])) 
	{
		$msg = $_POST['msg'];
		$idvoluntario = $_SESSION['idVol'];
		$idempresa = $_SESSION['idEmp'];

		$mensagem = new mensagemClass();

		$mensagem -> InsertMsgSaida($msg, $idempresa, $idvoluntario);
		echo "<script>window.location='../index.php?adm=admP'</script>";
	}
	echo "<script>window.location='../index.php?adm=admEmp&admV=" . $_SESSION['idVol'] . "'</script>";
}
echo "<script>window.location='../index.php?adm=admEmp&admV=" . $_SESSION['idVol'] . "'</script>";


?>