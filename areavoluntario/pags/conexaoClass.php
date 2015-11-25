<?php

class conexaoClass
{
	var $conn;

	public function abrir_conexao()
	{
		$servidor = 'mysql.hostinger.com.br';
		$usuario = 'u899754637_admin';
		$senha = 'a1b1c1d1';
		$banco = 'u899754637_volun';
	
		$this->conn = new mysqli ($servidor,$usuario,$senha,$banco);
		
	}
	public function getConn()
	{
		return $this->conn;
	}


}


?>