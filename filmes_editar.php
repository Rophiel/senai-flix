<?php
    include 'conexao.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM filmes WHERE filmes_id = $id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
        } else {
            echo 'Não há registros';
        }
    } else {
        echo 'ID do cliente não fornecido';
        exit();
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMES EDITAR</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>
    <h2> FILMES EDITAR </h2>
    <br>
    <form action="filmes_editar_salvar.php" method="POST">
        <input type="hidden" name="filmes_id" value="<?php echo $row['filmes_id']?>"><br>

        <label for="titulo">TÍTULO</label><br>
        <input type="text" name="titulo" value="<?php echo $row['titulo'] ?>"><br>
        <label for="descricao">DESCRIÇÃO</label><br>
        <input type="text" name="descricao" value="<?php echo $row['descricao']?>"><br>
        <label for="ano_lancamento">ANO LANÇAMENTO</label><br>
        <input type="date" name="ano_lancamento" value="<?php echo $row['ano_lancamento'] ?>"><br>
        <label for="genero"> GÊNERO </label><br>
        <input type="text" name="genero" value="<?php echo $row['genero'] ?>"><br>
        <label for="classificacao">CLASSIFICAÇÃO</label><br>
        <input type="text" name="classificacao" valu="<?php echo $row['classificacao'] ?>"><br>

        <input type="submit" value="EDITAR"><br>
    </form>
</body>
</html>