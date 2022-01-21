<?php

//info da conexao
$host = 'localhost';
$usuario = 'root';
$senha = 'root'
$banco = 'tabela';
$dsn = "mysql:host={$host};port=3306;dbame={$banco}";

try
{

	//conectando
	$pdo = new PDO($dsn, $usuario, $senha);
	}
	catch (PDOException $e)
	{
	
	//se ocorrer algum erro
	die($e->getMessage());
	}
	
?>