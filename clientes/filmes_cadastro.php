<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $filmes_id = htmlspecialchars($_POST['filme_id']);
        $titulo = htmlspecialchars($_POST['titulo']);
        $descricao = htmlspecialchars($_POST['descricao']);
        $ano_lancamento = date('Y-m-d H:i:s');
        $genero = htmlspecialchars($_POST['genero']);
        $classificacao = htmlspecialchars($_POST['classificacao']);
        $data_cadastro = date('Y-m-d H:i:s');
        $data_atualizacao = date('Y-m-d H:i:s');

        $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao)
                VALUES ('$titulo', '$descricao', '$ano_lancamento','$genero', '$classificacao', '$data_cadastro', NOW())";

        if($conn->query($sql)){
            header("Location: cadastro_sucesso.php");
            exit();
        } else {
            echo "Erro ao cadastrar dados" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO FILMES</title>
</head>
<body>
    <form method="post">
        <label for="titulo"> TÍTULO </label><br>
        <input type="text" name="titulo" id="titulo" required><br><br>
        <label for="titulo"> DESCRIÇÃO </label><br>
        <input type="text" name="descricao" id="descricao" required><br><br>
        <label for="titulo"> ANO LANÇAMENTO </label><br>
        <input type="date" name="ano_lancamento" id="ano_lancamento" required><br><br>
        <label for="titulo"> GENERO </label><br>
        <input type="text" name="genero" id="genero" required><br><br>
        <label for="titulo"> CLASSIFICACAO </label><br>
        <input type="text" name="classificacao" id="classificacao" required><br><br>
        <label for="titulo"> DATA CADASTRO </label><br>
        <input type="date" name="data_cadastro" id="data_cadastro" required><br><br>
        <br>
        <input type="submit" value="CADASTRAR">
        <a href="index.php"> VOLTAR PARA O MENU </a>
    </form>
</body>
</html>