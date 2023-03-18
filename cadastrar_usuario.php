<?php

    require('conexao.php');
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];

    $sql = "INSERT INTO cadastro_usuario (nome, email, senha)
                VALUES
            ('$nome_usuario', '$email', '$senha')";

    $res = mysqli_query($mysqli, $sql);

    if($res){
      //echo "Sucesso";
      header("Location: inicio.php");
    }
    else{
      echo "Erro";
    }
    
?>