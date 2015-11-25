<?php session_start(); ?>
<meta charset="utf-8">
<?php 



if (!empty($_POST['nomeEmpresa']) && !empty($_POST['cnpjEmpresa']) &&  !empty($_POST['email']) &&  !empty($_POST['descricao']) && !empty($_POST['dataFundada']) && !empty($_POST['idAtividade']) &&  !empty($_POST['ddd']) && !empty($_POST['telefone']) && !empty($_POST['estado']) && !empty($_POST['cep']) && !empty($_POST['nomeCidade']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) 
{
	if (isset($_POST['nomeEmpresa']) && isset($_POST['cnpjEmpresa']) &&  isset($_POST['email']) &&  isset($_POST['descricao']) && isset($_POST['dataFundada']) && isset($_POST['idAtividade']) &&  isset($_POST['ddd']) && isset($_POST['telefone']) && isset($_POST['estado']) && isset($_POST['cep']) && isset($_POST['nomeCidade']) && isset($_POST['usuario']) && isset($_POST['senha'])) 
	{
		include '../cls/empresaClass.php';
		include '../cls/conexaoClass.php';

		$nomeEmpresa = $_POST['nomeEmpresa'];
		$cnpjEmpresa = $_POST['cnpjEmpresa'];
		$email = $_POST['email'];
		$dataFundada = $_POST['dataFundada'];
		$descricao = $_POST['descricao'];
		$ddd = $_POST['ddd'];
		$telefone = $_POST['telefone'];
		$idAtividade = $_POST['idAtividade'];
		$nomeCidade = $_POST['nomeCidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];


		$empresa = new empresaClass();

	 	$empresa -> InsertEmpresa($nomeEmpresa, $cnpjEmpresa, $email, $dataFundada, $descricao, $ddd, $telefone, $idAtividade, $nomeCidade, $estado, $cep, $usuario, $senha);

		$_SESSION['mensagemvoluntario'] = "Cadastro efetuado com Sucesso";
	 	echo "<script>window.location='../index.php?m=l&#about'</script>";
	 }
}
else
{
	$_SESSION['mensagemvoluntario'] = "Erro no Cadastro, verifique os campos com atenção";
	echo "<script>window.location='../index.php?m=c&#about'</script>";
}

 ?>