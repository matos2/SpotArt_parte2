<?php

//arquivo de conexao
require_once('../config/conn.php');

//utilidade
require_once('../funcs/util.php');

//constantes
define('TAMANHO_MAXIMO', (2 * 1024 *1024));

//verifica se selecionou imagem
if (!isset($_FILES['foto']))
{
echo retorno('Selecione uma imagem');
exit;
}

//recupera dados dos campos
$foto = $_FILES['foto'];
$nome = $foto['name'];
$tipo = $foto['type'];
$tamanho = $foto['size'];

//validacoes
if(!preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp)$/', $tipo))
{
	echo retorno('Isso não é uma imagem válida');
	exit;
}

//tamanho
if ($tamanho > TAMANHO_MAXIMO)
{
	echo retorno('A imagem deve possuir no máximo 2 MB');
	exit;
}

	//transforma a foto em binario
	$conteudo = file_get_contents($foto['tpm_name']);
	
	//prepara comando
	$stmt = $pdo->prepare('INSERT INTO fotos (nome, conteudo, tipo, tamanho) VALUES (:nome, :conteudo, :tipo, :tamanho)');
	
	//define parametros
	$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
	$stmt->bindParam(':conteudo', $conteudo, PDO::PARAM_LOB);
	$stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
	$stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_INT);
	
	//executa e exibe resultado
	echo ($stmt->execute()) ?  retorno('Foto cadasrtada com sucesso', true) : retorno($stmt->errorInfo());
	
?>
