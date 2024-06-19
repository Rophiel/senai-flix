<?php
include 'conexao.php';

$sql = "SELECT cliente_id, nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro, data_atualizacao FROM clientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar: Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>
    <?php
        include 'header.php'; 
    ?>
    <div class="container">
        <h2 class="mt-5">Listar Clientes</h2>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>CEP</th>
                    <th>Email</th>
                    <th>Telefone</th>
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
                            echo '<th>' . $row['cliente_id'] . '</th>';
                            echo '<th>' . $row['nome'] . '</th>';
                            echo '<th>' . $row['cpf'] . '</th>';
                            echo '<th>' . $row['endereco'] . '</th>';
                            echo '<th>' . $row['bairro'] . '</th>';
                            echo '<th>' . $row['cidade'] . '</th>';
                            echo '<th>' . $row['estado'] . '</th>';
                            echo '<th>' . $row['cep'] . '</th>';
                            echo '<th>' . $row['email'] . '</th>';
                            echo '<th>' . $row['telefone'] . '</th>';
                            echo '<th>' . $row['data_cadastro'] . '</th>';
                            echo '<th>' . $row['data_atualizacao'] . '</th>';
                            echo '<td><a href="clientes_editar.php?id=' . $row['cliente_id'] . '" class="btn btn-primary btn-sm">Editar</a> <a href="clientes_remover.php?id=' . $row['cliente_id'] . '" class="btn btn-danger btn-sm">Deletar</a></td>';
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
