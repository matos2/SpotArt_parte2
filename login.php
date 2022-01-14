<?php
include "conexao.php";

//seleciona o bd
mysqli_select_db ($connect,$banco) or die("Error na seleção do banco");

//pega os valores de login
$senha = $_GET['senha'];
$login = $_GET['login'];
$email = $_GET['email'];

//verificação de preenchimento dos dados
if (empty ($senha) || empty ($login) || empty ($email)) {
	echo"<script type='text/javascript'>
	alert('O campo de usuario, email e senha devem ser preenchidos');
	window.location.href='login.html'; </script>";
}

//sql
$query_select= "SELECT *FROM 'pessoa' WHERE 'login' LIKE '$login' AND 'senha' LIKE '$senha' ";

//consulta um usuario existente
$select = mysqli_query($connect,$query_select);

//retorno de linhas
$row = mysqli_num_rows ($select);

//mensagem para usuario encontrado
if($row == 1) {
	echo "<script type='text/javascript'> alert('Login efetuado com sucesso!');
		location.href='login.html';</script>";
} else {
	echo "<script type='text/javascript'> alert('Usuario não encontrado. Verifique as informações ou cadastre-se');
		location.href='login.html';</script>";
}
mysqli_close($connect);
?>

