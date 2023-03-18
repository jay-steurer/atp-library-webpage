<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastrar Usuário</title>
    <meta charset="utf-8" />
</head>
<body>
    <div class="container" >
        <a class="links" id="paracadastro"></a>
          <div id="cadastro">
            <form action="cadastrar_usuario.php" method="post"> 
              <h1>Cadastro de novo usuário</h1> 

              <input type="hidden" name="id" />
              
              Nome <input type="text" name="nome_usuario"/><br><br>
    
              Email <input type="text" name="email_usuario"/><br><br>
      
              Senha <input type="text" name="senha_usuario"/><br><br>

              <p> 
                  <input type="submit" value="Cadastrar"/> 
              </p>
              
              <p class="link">  
                Já tem conta?
                <a href="index.php"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div>
      </div> 
</body>
</html>