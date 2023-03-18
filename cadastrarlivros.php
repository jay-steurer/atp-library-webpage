<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastrar livros</title>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Cadastrar Livros</h1>
    <form action="cadastrar_livros.php" method="post">

        Nome do livro <input type="text" name="nome_livro"/><br><br>
    
        Autor <input type="text" name="autor"/><br><br>

        Proprietário <input type="text" name="owner"/><br><br>

        Data de hoje <input type="date" name="data"/><br><br>

        <p> 
            <input type="submit" value="Cadastrar"/> 
        </p>
        
        <a href="inicio.php">Voltar</a>
    </form>
    
</body>
</html>