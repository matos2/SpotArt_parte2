<?php
//inclui arquivo de conexao
require_once('config/conn.php')

$id = (int) $_GET['id'];

//seleciona fotos
$stmt = $pdo->prepare('SELECT conteudo, tipo FROM fotos WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

//se executado
if ($stmt->execute())
{
	
	//aloca foto
	$foto = $stmt->fetchObject();
	
	//se existir
	if ($foto != null)
	{
		
		//tipo de retorno
		header('Content-Type: '.$foto->tipo);
		
		//retorna conteudo
		echo $foto->conteudo;
	}
}
?>