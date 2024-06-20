<?php
include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $ano_lancamento = htmlspecialchars($_POST['ano_lancamento']);
    $genero = htmlspecialchars($_POST['genero']);
    $classificacao = htmlspecialchars($_POST['classificacao']);
    $data_cadastro = date('Y-m-d H:i:s');
    $data_atualizacao = date('Y-m-d H:i:s');

    // QUERY PARA INSERÇÃO NO BANCO DE DADOS
    $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao)
            VALUES ('$titulo', '$descricao', '$ano_lancamento','$genero', '$classificacao', NOW(), NOW())";

    
    if($conn->query($sql)){
      echo "<script>alert('Cadastro realizado com sucesso'); window.location.href='index.php';</script>";
      exit(); // Encerra o script após redirecionamento
    } else {
        echo "Erro ao cadastrar dados" . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO FILMES</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>
    <?php include "header.php"; ?>

    <div class="container mt-4">
        <form method="post">

            <div class="form-group">
                <label for="titulo">TÍTULO</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
            </div>

            <div class="form-group">
                <label for="descricao">DESCRIÇÃO</label>
                <input type="text" class="form-control" name="descricao" id="descricao" required>
            </div>

            <div class="form-group">
                <label for="ano_lancamento">ANO LANÇAMENTO</label>
                <input type="date" class="form-control" name="ano_lancamento" id="ano_lancamento" required>
            </div>

            <div class="form-group">
                <label for="genero">GÊNERO</label>
                <input type="text" class="form-control" name="genero" id="genero" required>
            </div>

            <div class="form-group">
                <label for="classificacao">CLASSIFICAÇÃO</label>
                <input type="text" class="form-control" name="classificacao" id="classificacao" required>
            </div>

            <button type="submit" class="btn btn-primary">CADASTRAR</button>
            <a href="index.php" class="btn btn-secondary">VOLTAR PARA O MENU</a>
        </form>
    </div>

    <?php include "footer.php"; ?>

    <!-- Incluindo o JavaScript do Bootstrap no final do corpo para melhor desempenho -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
