<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sig_doc";

//Criar a conexao
$conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);






function connexao()
{
	try {
		$connexao = new PDO("mysql:host=localhost;dbname=sig_doc", "root", "", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
	} catch (PDOException $exception) {
		echo $exception->getMessage();
	}


	return $connexao;
}
