<?php
include 'conexao.php';

$sql = "SELECT * FROM filmes";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR FILMES</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/caveira-de-pirata.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container">
        <h2 class="mt-5">Listar Filmes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TÍTULO</th>
                    <th>DESCRIÇÃO</th>
                    <th>ANO LANCAMENTO</th>
                    <th>GENERO</th>
                    <th>CLASSIFICACAO</th>
                    <th>DATA CADASTRO</th>
                    <th>DATA ATUALIZAÇÃO</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   if($resultado->num_rows > 0){
                    while($row = $resultado->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $row['filmes_id'] . '</td>';
                        echo '<td>' . $row['titulo'] . '</td>';
                        echo '<td>' . $row['descricao'] . '</td>';
                        echo '<td>' . $row['ano_lancamento'] . '</td>';
                        echo '<td>' . $row['genero'] . '</td>';
                        echo '<td>' . $row['classificacao'] . '</td>';
                        echo '<td>' . $row['data_cadastro'] . '</td>';
                        echo '<td>' . $row['data_atualizacao'] . '</td>';
                        echo '<td><a href="filmes_editar.php?id=' . $row['filmes_id'] . '" class="btn btn-primary btn-sm">Editar</a> <a href="filmes_remover.php?id=' . $row['filmes_id'] . '" class="btn btn-danger btn-sm">Deletar</a></td>';
                        echo '</tr>';
                    }
                   } else {
                        echo '<tr><td colspan="9">Nenhum registro encontrado</td></tr>';
                   }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
