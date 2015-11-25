<?php 

class voluntarioClass
{
	var $idVoluntario;
	var $nomeVoluntario;
	var $cpfVoluntario;
	var $dataNascimento;
	var $sexo;
	var $email;
	var $dddTelefone;
	var $telefone;
	var $dddCelular;
	var $celular;
	var $nomeCidade;
	var $estado;
	var $cep;
	var $areaT;
	var $volJa;
	var $disponibilidade;
	var $descricao;
	var $escolaridade;
	var $afinidade;
	var $idAtividade;
	var $Senha;
	var $Login;
	var $resultado;
	
	public function getAll()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT v.idVoluntario, v.nomeVoluntario, v.cpfVoluntario, v.dataNascimento, v.sexo, v.email, t.dddTelefone, t.telefone, t.dddCelular, t.celular, a.afinidade, c.nomeCidade, c.estado, e.descricao, e.disponibilidade, att.nomeAtividade, aa.areaT 
				from voluntario v 
					INNER JOIN telefone t 
						on t.idVoluntario = v.idVoluntario 
					INNER JOIN afinidade a 
						on a.idVoluntario = v.idVoluntario 
					INNER JOIN cidade c 
						on c.idVoluntario = v.idVoluntario 
					INNER JOIN extravoluntario e 
						on e.idVoluntario = v.idVoluntario
					INNER JOIN areadeatuacao aa 
						on aa.idVoluntario = v.idVoluntario 
					INNER JOIN disponibilidade vat 
						on vat.idVoluntario = v.idVoluntario 
					INNER JOIN atividade att 
						on att.idAtividade = vat.idAtividade
				order by v.nomeVoluntario";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getAllDisponibilidade()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT v.idVoluntario, v.nomeVoluntario, t.dddTelefone, t.telefone, a.nomeAtividade, v.status
				FROM voluntario v
					INNER JOIN disponibilidade d 
						ON d.idVoluntario = v.idVoluntario
					INNER JOIN atividade a 
						ON a.idAtividade = d.idAtividade
					INNER JOIN telefone t
						ON t.idVoluntario = a.idAtividade
				WHERE d.statusDisponibilidade = 0
				ORDER BY d.idDisponibilidade DESC";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getSete()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT v.idVoluntario, v.nomeVoluntario, t.dddTelefone, t.telefone, a.nomeAtividade, v.status
				FROM voluntario v
					INNER JOIN disponibilidade d 
						ON d.idVoluntario = v.idVoluntario
					INNER JOIN atividade a 
						ON a.idAtividade = d.idAtividade
					INNER JOIN telefone t
						ON t.idVoluntario = a.idAtividade
				WHERE d.statusDisponibilidade = 0
				ORDER BY d.idDisponibilidade DESC 
				LIMIT 7";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function CreateVoluntario($nomeVoluntario, $cpfVoluntario, $dataNascimento, $sexo, $email, $dddTelefone, $telefone, $dddCelular, $celular, $nomeCidade, $estado, $cep, $areaT, $volJa, $disponibilidade, $descricao ,$escolaridade, $afinidade, $idAtividade, $Senha, $Login)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql1 = "INSERT into voluntario (nomeVoluntario,cpfVoluntario,dataNascimento,sexo,email) values ('$nomeVoluntario','$cpfVoluntario','$dataNascimento','$sexo','$email')";
		$conn = $Oconn -> getconn();

		$conn -> query($sql1);

		$idF = $conn->insert_id;

		$sql2 = "INSERT into telefone (dddTelefone,telefone,dddCelular,celular,idVoluntario) values ('$dddTelefone','$telefone','$dddCelular','$celular','$idF')";
		$conn -> query($sql2);

		$sql3 = "INSERT into cidade (nomeCidade,estado,cep,idVoluntario) values ('$nomeCidade','$estado','$cep','$idF')";
		$conn -> query($sql3);

		$sql4 = "INSERT into areadeatuacao (areaT,idVoluntario) values ('$areaT','$idF')";
		$conn -> query($sql4);

		$sql5 = "INSERT into extravoluntario (volJa,disponibilidade,descricao,escolaridade,idVoluntario) values ('$volJa','$disponibilidade','$descricao','$escolaridade','$idF')";
		$conn -> query($sql5);

		$sql6 = "INSERT into afinidade (afinidade,idVoluntario) values ('$afinidade','$idF')";
		$conn -> query($sql6);

		$sql7 = "INSERT into disponibilidade (idVoluntario,idAtividade) values ('$idF','$idAtividade')";
		$conn -> query($sql7);

		$sql8 = "INSERT into acesso (Senha,Login,idVoluntario) values ('$Senha','$Login','$idF')";
		$conn -> query($sql8);
	}

	public function TrocaStatus($id, $stat)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "UPDATE voluntario SET status='$stat' WHERE idVoluntario='$id'";
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}

	public function DeletVoluntario($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "delete from voluntario where idVoluntario = '$id'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}

	public function getOne($idV)
	{

		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		
		$sql = "SELECT v.idVoluntario, v.nomeVoluntario, v.cpfVoluntario, v.dataNascimento, v.sexo, v.email, t.dddTelefone, t.telefone, t.dddCelular, t.celular, a.afinidade, c.nomeCidade, c.estado, e.descricao, e.disponibilidade, att.nomeAtividade, aa.areaT, c.cep, e.escolaridade, e.volJa, ac.Login, ac.Senha
				from voluntario v 
					INNER JOIN telefone t 
						on t.idVoluntario = v.idVoluntario 
					INNER JOIN afinidade a 
						on a.idVoluntario = v.idVoluntario 
					INNER JOIN cidade c 
						on c.idVoluntario = v.idVoluntario 
					INNER JOIN extravoluntario e 
						on e.idVoluntario = v.idVoluntario
					INNER JOIN areadeatuacao aa 
						on aa.idVoluntario = v.idVoluntario
					INNER JOIN acesso ac 
						on ac.idVoluntario = v.idVoluntario 
					INNER JOIN disponibilidade vat 
						on vat.idVoluntario = v.idVoluntario 
					INNER JOIN atividade att 
						on att.idAtividade = vat.idAtividade
				where v.idVoluntario = '$idV'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function UpdateVoluntario($idV, $nomeVoluntario, $cpfVoluntario, $dataNascimento, $sexo, $email, $dddTelefone, $telefone, $dddCelular, $celular, $nomeCidade, $estado, $cep, $areaT, $volJa, $disponibilidade, $descricao ,$escolaridade, $afinidade, $idAtividade, $Senha, $Login)
	{

		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();

		$sql1 = "UPDATE voluntario set nomeVoluntario = '$nomeVoluntario',cpfVoluntario = '$cpfVoluntario',dataNascimento ='$dataNascimento',sexo = '$sexo',email = '$email' where idVoluntario = '$idV'";
		$conn = $Oconn -> getconn();

		$conn -> query($sql1);

		$sql2 = "UPDATE telefone set dddTelefone = '$dddTelefone',telefone = '$telefone' ,dddCelular = '$dddCelular',celular = '$celular' where idVoluntario = '$idV'";
		$conn -> query($sql2);

		$sql3 = "UPDATE cidade set nomeCidade = '$nomeCidade', estado = '$estado', cep = '$cep' where idVoluntario = '$idV'";
		$conn -> query($sql3);

		$sql4 = "UPDATE areadeatuacao set areaT = '$areaT' where idVoluntario = '$idV'";
		$conn -> query($sql4);

		$sql5 = "UPDATE extravoluntario set volJa = '$volJa',disponibilidade = '$disponibilidade' ,descricao = '$descricao',escolaridade = '$escolaridade' where idVoluntario = '$idV'";
		$conn -> query($sql5);

		$sql6 = "UPDATE afinidade set afinidade = '$afinidade' where idVoluntario = 'idV'";
		$conn -> query($sql6);

		$sql7 = "UPDATE disponibilidade set idAtividade = '$idAtividade' where idVoluntario = '$idV'";
		$conn -> query($sql7);

		$sql8 = "UPDATE acesso set Senha = '$Senha',Login = '$Login' where idVoluntario = '$idV'";
		$conn -> query($sql8);
	}
	public function getPass($user, $pass)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		
		$sql = "SELECT a.idVoluntario,a.Senha,a.Login
					from acesso a
						INNER JOIN voluntario v 
							on v.idVoluntario = a.idVoluntario
					where a.Senha = '$pass' && a.Login = '$user'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getConsulta()
	{
		return $this -> resultado;
	}

}
 