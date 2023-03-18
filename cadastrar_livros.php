<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voltar</title>
</head>
<body>
    <article>
        <table>
            <?php
                require('conexao.php');
                $nome_livro = $_POST['nome_livro'];
                $autor = $_POST['autor'];
                $owner = $_POST['owner'];
                $data = $_POST['data'];

                $sql = "INSERT INTO cadastro_livros (nome_livro, autor, proprietario, data_hoje)
                            VALUES
                        ('$nome_livro', '$autor', '$owner', '$data')";

                $res = mysqli_query($mysqli, $sql);

                if($res){
                    echo "LIVRO CADASTRADO COM SUCESSO";
                }
                else{
                    echo "Erro";
                }
            ?>
        </table>
    </article>
    <br>
    <a href="inicio.php">Voltar</a>
</body>
</html>