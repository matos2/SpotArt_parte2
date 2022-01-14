<?php
include "conexao.php";

$usuario = $_GET['usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];

//seleciona o bd
mysqli_select_db ($connect,$banco) or die("Erro na seleção do banco");

//inserir um novo usuario no bd
if (isset($_GET['casastrar'])) {
	$sql = "INSEERT INTO pessoa values(null,
			'".$usuario."','".$email."','".$senha."')";
	
	if(mysqli_query	($connect,$sql)){
		$msg = "Cadastrado com sucesso!";
		echo "<script type='text/javascript'>
		alert('$msg');
		window.location.href='login.html';</script>";
	} else {
		$msg = "Erro ao cadastrar! Por favor tente novamente mais tarde.";
		echo "<script type='text/javascript'>
		alert('$msg');
		window.location.href='login.html';</script>";
	}
}

//encerrar conexão
mysqli_close($connect);
?>