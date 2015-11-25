<?php 

class mensagemClass
{
	var $idMensagem;
	var $mensagem;
	var $status;
	var $idEmpresa;
	var $idVoluntario;
	var $nomeEmpresa;
	var $nomeVoluntario;
	var $resultado;

	public function getAllVoluntario($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, e.nomeEmpresa
					from mensagem m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where v.idVoluntario = '$idV'
				order by m.idMensagem desc";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getSeteVoluntario($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "select m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, e.nomeEmpresa
					from mensagem m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where v.idVoluntario = '$idV' && m.status = 0
				order by m.idMensagem desc
				limit 7";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getSeteEmpresa($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, v.nomeVoluntario
					from mensagemempresa m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where e.idEmpresa = '$idV' && m.status = 0
				order by m.idMensagem desc
				limit 7";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getAllEmpresa($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, v.nomeVoluntario
					from mensagemempresa m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where e.idEmpresa = '$idV'
				order by m.idMensagem desc";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getAllEmpresaSaida($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, v.nomeVoluntario
					from mensagem m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where e.idEmpresa = '$idV'
				order by m.idMensagem desc";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getAllVoluntarioSaida($idV)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "SELECT m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario, v.nomeVoluntario
					from mensagemempresa m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where v.idVoluntario = '$idV'
				order by m.idMensagem desc";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function TrocaStatusMensagem($idM)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "UPDATE mensagem SET status=1 WHERE idMensagem='$idM'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function TrocaStatusMensagemEmp($idM)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "UPDATE mensagemempresa SET status='1' WHERE idMensagem='$idM'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);

	}

	public function deleteMensagemEntrada($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "delete from mensagem where idMensagem = '$id'";
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}
	public function deleteMensagemSaida($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "delete from mensagemempresa where idMensagem = '$id'";
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}
	public function getOne($idM)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "select m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario , e.nomeEmpresa , v.nomeVoluntario
					from mensagem m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where m.idMensagem = '$idM'
				";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getOneSaida($idM)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "select m.idMensagem, m.mensagem, m.status, m.idEmpresa, m.idVoluntario , e.nomeEmpresa , v.nomeVoluntario
					from mensagemempresa m
				inner join voluntario v
					on v.idVoluntario = m.idVoluntario
				inner join empresa e
					on e.idEmpresa = m.idEmpresa
				where m.idMensagem = '$idM'
				";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function InsertMsg($msg, $idEmp, $idVol)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "insert into mensagemempresa (mensagem, idVoluntario, idEmpresa) values ('$msg',".$idVol.",".$idEmp.")";
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}
	public function InsertMsgSaida($msg, $idEmp, $idVol)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "insert into mensagem (mensagem, idVoluntario, idEmpresa) values ('$msg',".$idVol.",".$idEmp.")";
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}

	public function getConsulta()
	{
		return $this -> resultado;
	}

}
 