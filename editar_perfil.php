<?php

    require('conexao.php');
	require('autentica.php');

	$id = "";
	$nome = "";
	$email = "";
	$senha = "";

	//Se foi enviado ID via GET - se é edição de paciente
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM cadastro_usuario WHERE id = $id";
		//Envia a consulta para obter dados do paciente atual
		$res = mysqli_query($mysqli, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
	}

?>
		<header>
		  <h2>Editar Perfil</h2>
		</header> 
		  <article>
			<form action="editarperfil.php" method="post">
			
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
				<label for="nome">Nome</label> 
				<input type="text" name="nome" value="<?php echo $nome; ?>" /> <br><br>
				

				<label for="email">Email</label>
				<input type="text" name="email" autocomplete="off" value="<?php echo $email; ?>"/><br><br>
				

				<label for="senha">Senha</label>
				<input type="text" name="senha" value="<?php echo $senha; ?>" /><br><br>
				

				<input type="submit" value="Salvar"/>
			
			</form>
			<a href="inicio.php">Voltar</a>
		  </article>
		</section>