<?php 

if (isset($_GET["idM"]))
{
	$id = $_GET["idM"];
}

	include '../../cls/mensagemClass.php';
	include '../../cls/conexaoClass.php';

$msg = new mensagemClass();
$del = $msg -> deleteMensagemEntrada($id);

if ($del) {
	
	echo "<script>window.location='../index.php?adm=admS'</script>";
}
else
{
	
 	echo "<script>window.location='../index.php?adm=admS'</script>";
}
 

?>