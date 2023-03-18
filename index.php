<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coisas Emprestadas</title>
        <link rel="stylesheet" href="css/main.css">
        <meta charset="utf-8" />
    </head>
<body>
    <div class="conteiner">
        BIBLIOTECA VIRTUAL</br>
    </div>
    <div class="center">
        <h1>Fazer Login</h1>
        <form action="login.php" method="post">
            <div class="txt_field">
                <input type="text" name="login" id="login"> 
                <span></span>
                <label>Usuário</label>
            </div>
            <div class="txt_field">
                <input type="password" name="senha" id="senha">
                <span></span>
                <label>Senha</label>
            </div>
            <div class="pass">Esqueceu a senha?</div>
            <input type="submit" name="btn-entrar" value="Login">
            <div class="signup_link">
                Ainda não tem cadastro? <a href="cadastrarusuario.php">clique aqui</a>
            </div>
            <div class="assinatura"> by jessica steurer </div>
        </form>
    </div> 
</body>
</html>