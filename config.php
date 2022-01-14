<?php 
include "conexao.php";

$usuario = $_GET['usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];

//seleciona o bd
mysqli_select_db ($connect,$banco) or die("Erro na seleção do banco");

//atualizar dados do bd

if (isset($_GET['atualizar'])) {
	$sql = "UPDATE pessoa SET email='$email', usuario='$usuario', senha='$senha' WHERE usuario='$usuario'";
	
	if(mysqli_query($connect,$sql)){
		$msg ="Atualizado com sucesso!";
		echo "<script type='text/javascript'>
		alert('$msg');
		window.location.href='config.html';</script>";
	}
}

//excluir usuario
if (isste($_GET['apagar'])){
	$sql = "DELETE FROM pessoa WHERE usuario = '$usuario'";
	
	if(mysqli_query($connect, $sql)){
		$msg ="Usuario deletado com sucesso";
		echo "<script type='text/javascript'>
		alert('$msg');
		window.location.href='config.html';</script>";
	} else{
		$msg ="Erro ao deletar. Tente novamente mais tarde";
		echo "<script type='text/javascript'>
		alert('$msg');
		window.location.href='config.html';</script>";
	}
}

//encerrar conexao
mysqli_close($connect);
?>