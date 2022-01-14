<?php

//dados de conexão

$servidor='localhost';	//servidor
$usuario='root';		// usuario
$senhabd='';			//senha 
$banco='minhabase';		//database

//conexão com o bd

$connect = mysqli_connect($servidor,$usuario,$senhabd)or die("Erro na seleção do banco");
