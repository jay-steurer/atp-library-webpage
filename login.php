<?php
require('conexao.php');
require('autentica.php');

if(isset($_POST['login'])){ 
	$login = $_POST["login"];
	$senha = $_POST["senha"];
}

	$sql = "SELECT * FROM cadastro_usuario WHERE email = '$login' AND senha = '$senha'";
	$res = mysqli_query($mysqli, $sql);
	
	//Obtém QTDE de registros encontrados
	$qtdeRegistros = mysqli_num_rows($res);
	
	//Encontrou login e senha compatíveis
	if($qtdeRegistros > 0){
		
		session_start();

		//Obtém dados do usuário
		$row = mysqli_fetch_assoc($res);
		
		//Armazena informaçoes do usuário na Sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: index.php?erro=1");
	}

?>