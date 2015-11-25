<?php 
	session_start();

	include "../cls/voluntarioClass.php";
	include "../cls/empresaClass.php";
	include "../cls/conexaoClass.php";

	if (!empty($_POST["Usuario"]) OR !empty($_POST["Senha"])) 
	{
		if (isset($_POST["Usuario"]) && isset($_POST["Senha"])) 
		{
			$user = $_POST["Usuario"];
			$pass = $_POST["Senha"];

			$log = $_POST["log"];
			if ($log==1) 
			{
				$voluntario = new voluntarioClass();
				$voluntario -> getPass($user, $pass);
				$result = $voluntario -> getConsulta();

				if ($linha = $result -> fetch_assoc()) 
				{
					$senha = $linha["Senha"];
					if ($senha == $pass) {
						$_SESSION["idVoluntario"] = $linha["idVoluntario"];
						$_SESSION['logado'] = true;
						$_SESSION['Usuario'] = $linha['Login'];
						header("Location:../areavoluntario/index.php"); 
					}
					else
					{
						$_SESSION['mensagemvoluntario'] = "Senha inválida";
						echo "<script>window.location='../index.php?m=l&#about'</script>";
					}
				}
				else
				{
					$_SESSION['mensagemvoluntario'] = "Nome de usuário inválido!";
					echo "<script>window.location='../index.php?m=l&#about'</script>";
				}
			}
			if($log==2)
			{
				$empresa = new empresaClass();
				$empresa -> getPass($user, $pass);
				$result = $empresa -> getConsulta();

				if ($linha = $result -> fetch_assoc()) 
				{
					$senha = $linha["Senha"];
					if ($senha == $pass) {
						$_SESSION["idEmpresa"] = $linha["idEmpresa"];
						$_SESSION['logado'] = true;
						$_SESSION['Usuario'] = $linha['Login'];
						header("Location:../areaempresa/index.php"); 
					}
					else
					{
						$_SESSION['mensagemvoluntario'] = "Senha inválida";
						echo "<script>window.location='../index.php?m=l&#about'</script>";
					}
				}
				else
				{
					$_SESSION['mensagemvoluntario'] = "Nome de usuário inválido!";
					echo "<script>window.location='../index.php?m=l&#about'</script>";
				}
			}
			
			
		}
	}
	else
		{
			$_SESSION['mensagemvoluntario'] = "Login e Senha Errado!";
			echo "<script>window.location='../index.php?m=l&#about'</script>";
		}

?>