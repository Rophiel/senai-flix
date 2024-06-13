<?php
    include 'conexao.php';

    $sql = "SELECT id, nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro, data_atualizacao FROM clientes";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar: Clientes</title>
</head>
<body>
    <h2> LISTAR USUÁRIOS </h2>
    <table>
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> CPF </th>
            <th> ENDERECO </th>
            <th> BAIRRO </th>
            <th> CIDADE </th>
            <th> ESTADO </th>
            <th> CEP </th>
            <th> EMAIL </th>
            <th> TELEFONE </th>
            <th> DATA CADASTRO </th>
            <th> DATA ATUALIZACAO </th>
        </tr>
        <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>'. $row['id'] . '</td>'. '<td>' . $row['nome'] . '</td>' . '<td>' . $row['cpf'] . '</td>' .'<td>'. $row['endereco'] . '</td>'. '<td>'. $row['bairro'] .'<td>'. $row['cidade'] . $row['estado'] . $row['email'] . $row['telefone'] . $row['data_cadastro'] . $row['data_atualizacao'];
                echo '</tr>';
            }
          }
        ?>
    </table>
</body>
</html>