<?php

require('conexao.php');

	$id = "id";
	$nome = "email";
	$senha = "senha";
	
	//Se foi enviado ID via GET - se é edição de paciente
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM cadastro_usuario WHERE id = $id";
		//Envia a consulta para obter dados do paciente atual
		$res = mysqli_query($mysqli, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
		$email = $row['email'];
		$senha = $row['senha'];
		
	}


?>