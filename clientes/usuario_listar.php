<?php
    include 'conexao.php';

    $sql = "SELECT usuario_id, nome, email, data_cadastro, data_atualizacao FROM usuarios";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE USUÁRIOS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <h2 class="mt-5">Listar Usuarios</h2>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Cadastro</th>
                    <th>Data Atualização</th>
                    <th> AÇÕES </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result ->num_rows > 0){
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                            echo '<th>' . $row['usuario_id'] . '</th>';
                            echo '<th>' . $row['nome'] . '</th>';
                            echo '<th>' . $row['email'] . '</th>';
                            echo '<th>' . $row['data_cadastro'] . '</th>';
                            echo '<th>' . $row['data_atualizacao'] . '</th>';
                            echo '<td><a href="usuario_editar.php?id=' . $row['usuario_id'] . '" class="btn btn-primary btn-sm">Editar</a> <a href="usuario_remover.php?id=' . $row['usuario_id'] . '" class="btn btn-danger btn-sm">Deletar</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>