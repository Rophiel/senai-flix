<?php

    include 'conexao.php';

    if(isset($_GET['id'])){
        $id = intval($_GET[' id']);

        $sql = "SELECT * FROM clientes WHERE id = '$id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
        } else {
            echo "Não há registros de usuários";
            exit();
        }

    } else {
        echo "ID não específicado";
        exit();
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITANDO DADOS DE USUÁRIO</title>
</head>
<body>
    <h2> EDITANDO DADOS DE UM USUÁRIO </h2>

    <form action="usuario_editar_salvar.php" method="post">
        <input type="hidden" name="usuario_id" id="usuario_id" required value="<?php echo $row['usuario_id']; ?>"><br>
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome" required value="<?php echo htmlspecialchars($row['nome']); ?>"><br>
        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" required value="<?php echo htmlspecialchars($row['email']); ?>"><br>
        <br>
        <input type="submit" value="SALVAR"><br>
    </form>
</body>
</html>