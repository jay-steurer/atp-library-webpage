<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de Livros</title>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Lista de Livros</h1>
    <article>
        <table border="1">
            <tr>
                <td>nome</td>
                <td>autor</td>
                <td>disponivel</td>
            </tr>
            <?php

                require('conexao.php');
                $sql = "SELECT nome_livro, disponivel, autor FROM cadastro_livros";
                $res = mysqli_query($mysqli, $sql);

                while($row = mysqli_fetch_assoc($res)){
                 
                    echo "<tr>
                            <td>". $row['nome_livro'] ."</td>
                            <td>". $row['autor'] ."</td>
                            <td>". $row['disponivel'] ."</td>
                        </tr>";
                }

            ?>
        </table>
    </article>
    <a href="inicio.php">Voltar</a>
</body>
</html>