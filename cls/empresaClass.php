<?php 

class empresaClass
{
	var $idEmpresa;
	var $nomeEmpresa;
	var $cnpjEmpresa;
	var $email;
	var $dataFundada;
	var $descricao;
	var $nomeAtividade;
	var $idAtividade;
	var $ddd;
	var $telefone;
	var $nomeCidade;
	var $estado;
	var $cep;
	var $Usuario;
	var $Senha;
	var $resultado;


	public function getAll()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = 'SELECT e.idEmpresa, e.nomeEmpresa, e.cnpjEmpresa, e.dataFundada, e.ddd, e.telefone,a.nomeAtividade, ex.descricao
					from empresa e 
				inner join atividade_has_empresa ae
					on ae.idEmpresa = e.idEmpresa
				inner join atividade a
					on a.idAtividade = ae.idAtividade
				inner join extraempresa ex
					on ex.idEmpresa = e.idEmpresa
				order by e.nomeEmpresa';
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getAllNecessidades()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT e.idEmpresa ,e.nomeEmpresa, e.ddd, e.telefone, a.nomeAtividade
				FROM empresa e
				INNER JOIN necessidade n ON n.idEmpresa = e.idEmpresa
				INNER JOIN atividade a ON a.idAtividade = n.idAtividade
				WHERE n.statusNecessidade =0
				ORDER BY n.idNecessidade DESC";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getSete()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT e.idEmpresa ,e.nomeEmpresa, e.ddd, e.telefone, a.nomeAtividade
				FROM empresa e
				INNER JOIN necessidade n ON n.idEmpresa = e.idEmpresa
				INNER JOIN atividade a ON a.idAtividade = n.idAtividade
				WHERE n.statusNecessidade =0
				ORDER BY n.idNecessidade DESC 
				LIMIT 7";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function InsertEmpresa($nomeEmpresa, $cnpjEmpresa, $email, $dataFundada, $descricao, $ddd, $telefone, $idAtividade, $nomeCidade, $estado, $cep, $usuario, $senha)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql1 = "INSERT into empresa (nomeEmpresa,cnpjEmpresa,email,dataFundada,ddd,telefone) values ('$nomeEmpresa','$cnpjEmpresa','$email','$dataFundada','$ddd','$telefone')";
		
		$conn = $Oconn -> getconn();
		$conn -> query($sql1);

		$idF = $conn->insert_id;

		$sql2 = "INSERT into extraempresa (descricao,idEmpresa) values ('$descricao','$idF')";
		$conn -> query($sql2);

		$sql3 = "INSERT into necessidade (idAtividade,idEmpresa) values ('$idAtividade','$idF')";
		$conn -> query($sql3);

		$sql4 = "INSERT into acesso (Senha,Login,idEmpresa) values ('$senha','$usuario','$idF')";
		$conn -> query($sql4);

		$sql5 = "INSERT into cidade (nomeCidade,estado,cep,idEmpresa) values ('$nomeCidade','$estado','$cep','$idF')";
		$conn -> query($sql5);

	}
	public function UpdateEmpresa($idEmp, $nomeEmpresa, $cnpjEmpresa, $email, $dataFundada, $descricao, $ddd, $telefone, $idAtividade, $nomeCidade, $estado, $cep, $usuario, $senha)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql1 = "UPDATE empresa set nomeEmpresa = '$nomeEmpresa',cnpjEmpresa = '$cnpjEmpresa',email = '$email',dataFundada = '$dataFundada',ddd = '$ddd',telefone = '$telefone' where idEmpresa = '$idEmp'";
		
		$conn = $Oconn -> getconn();
		$conn -> query($sql1);

		$sql2 = "UPDATE extraempresa set descricao = '$descricao' where idEmpresa = '$idEmp'";
		$conn -> query($sql2);

		$sql3 = "UPDATE necessidade set idAtividade = '$idAtividade' where idEmpresa = '$idEmp')";
		$conn -> query($sql3);

		$sql4 = "UPDATE acesso set Senha = '$senha',Login = '$usuario' where idEmpresa = '$idEmp')";
		$conn -> query($sql4);

		$sql5 = "UPDATE cidade set nomeCidade = '$nomeCidade',estado='$estado',cep='$cep' where idEmpresa = '$idEmp')";
		$conn -> query($sql5);
	}
	public function DeletVoluntario($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "delete from voluntario where idVoluntario = '$id'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getOneView($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT e.idEmpresa, e.nomeEmpresa, e.cnpjEmpresa,e.email, e.ddd, e.telefone, c.cep, c.nomeCidade, c.estado, e.dataFundada, ex.descricao, a.Login, a.Senha
					from empresa e 
				inner join cidade c
					on c.idEmpresa = e.idEmpresa
				inner join acesso a
					on a.idEmpresa = e.idEmpresa
				inner join extraempresa ex
					on ex.idEmpresa = e.idEmpresa
				where e.idEmpresa='$id'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getOne($idV)
	{

		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		
		$sql = "SELECT e.idEmpresa, e.nomeEmpresa, e.cnpjEmpresa,e.email, e.dataFundada, e.ddd, e.telefone
					from empresa e 
				inner join cidade c
					on c.idEmpresa = e.idEmpresa
				inner join acesso a
					on a.idEmpresa = e.idEmpresa
				where e.idEmpresa='$idV'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getPass($user, $pass)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		
		$sql = "SELECT a.idEmpresa,a.Senha,a.Login
					from acesso a
						inner join empresa e
							on e.idEmpresa = a.idEmpresa
					where a.Senha = '$pass' && a.Login = '$user'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getConsulta()
	{
		return $this -> resultado;
	}

}
 