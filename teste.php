<?php

    require('conexao.php');

	$id = "";
	$nome = "";
	$email = "";
	$senha = "";
?>
    <input type="hidden" name="id" value="<?=$id?>">
<?php

if(isset($_GET['id'])){
		
    //Obtém valor enviado via GET
    $id = $_GET['id'];                  

    $sql = "SELECT id, nome, email, senha FROM cadastro_usuario";
        
        //Envia código SQL para o MySQL
    $res = mysqli_query($mysqli, $sql);

    $row = mysqli_fetch_assoc($res);
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
        
      
    
}
?>
<header>
		  <h2>Seu perfil</h2>
		</header>
        <section>
            <article>
            <table border="1">
                <tr>
                    <td>id</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Senha</td>
                </tr>
            </article>
        </section>
        <a href="inicio.php">Voltar</a>