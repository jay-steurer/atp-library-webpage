<?php

    require('conexao.php');
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM cadastro_usuario WHERE id = $id";
	
	$res = mysqli_query($mysqli, $sql);
	
	header("Location: editarperfil.php");