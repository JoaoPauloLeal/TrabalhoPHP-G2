<?php session_start(); ?>
<meta charset="utf-8">
<?php 


if (!empty($_POST['nomeVoluntario']) && !empty($_POST['cpfVoluntario']) &&  !empty($_POST['dataNascimento']) &&  !empty($_POST['sexo']) && !empty($_POST['email']) && !empty($_POST['dddTelefone']) &&  !empty($_POST['telefone']) && !empty($_POST['nomeCidade']) && !empty($_POST['estado']) && !empty($_POST['cep']) && !empty($_POST['areaT']) && !empty($_POST['volJa']) && !empty($_POST['disponibilidade']) && !empty($_POST['escolaridade']) && !empty($_POST['afinidade']) && !empty($_POST['idAtividade']) && !empty($_POST['Senha']) && !empty($_POST['Login'])) 
{
	if (isset($_POST['nomeVoluntario']) && isset($_POST['cpfVoluntario']) &&  isset($_POST['dataNascimento']) &&  isset($_POST['sexo']) && isset($_POST['email']) && isset($_POST['dddTelefone']) &&  isset($_POST['telefone']) && isset($_POST['nomeCidade']) && isset($_POST['estado']) && isset($_POST['cep']) && isset($_POST['areaT']) && isset($_POST['volJa']) && isset($_POST['disponibilidade']) && isset($_POST['escolaridade']) && isset($_POST['afinidade']) && isset($_POST['idAtividade']) && isset($_POST['Senha']) && isset($_POST['Login'])) 
	{
		include '../cls/voluntarioClass.php';
		include '../cls/conexaoClass.php';

		$nomeVoluntario = $_POST['nomeVoluntario'];
		$cpfVoluntario = $_POST['cpfVoluntario'];
		$dataNascimento = $_POST['dataNascimento'];
		$sexo = $_POST['sexo'];
		$email = $_POST['email'];
		$dddTelefone = $_POST['dddTelefone'];
		$telefone = $_POST['telefone'];
		$dddCelular = $_POST['dddCelular'];
		$celular = $_POST['celular'];
		$nomeCidade = $_POST['nomeCidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		$areaT = $_POST['areaT'];
		$volJa = $_POST['volJa'];
		$disponibilidade = $_POST['disponibilidade'];
		$escolaridade = $_POST['escolaridade'];
		$descricao = $_POST['descricao'];
		$afinidade = $_POST['afinidade'];
		$idAtividade = $_POST['idAtividade'];
		$Senha = $_POST['Senha'];
		$Login = $_POST['Login'];

		$voluntario = new voluntarioClass();

	 	$voluntario -> CreateVoluntario($nomeVoluntario, $cpfVoluntario, $dataNascimento, $sexo, $email, $dddTelefone, $telefone, $dddCelular, $celular, $nomeCidade, $estado, $cep, $areaT, $volJa, $disponibilidade, $descricao ,$escolaridade, $afinidade, $idAtividade, $Senha, $Login);
	 	
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