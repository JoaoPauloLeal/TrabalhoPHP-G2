<?php 

class tipoClass
{
	var $idAtividade;
	var $nomeAtividade;
	var $resultado;

	public function getAll()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = 'select idAtividade, nomeAtividade
					from atividade
				order by nomeAtividade';
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function InsertAtividade($nomeAtividade)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "insert into atividade ('$nomeAtividade')";
		
		$conn = $Oconn -> getconn();
		$conn -> query($sql);
	}

	public function DeletAtividade($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = "delete from atividade where idAtividade = '$id'";
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getOne($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = 'select * from voluntario';
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getConsulta()
	{
		return $this -> resultado;
	}

}
