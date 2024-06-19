<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = htmlspecialchars($_POST['nome']);
        $senha = md5($_POST['senha']);
        $email = htmlspecialchars($_POST['email']);
        $data_cadastro = date('Y-m-d H:i:s');
        $data_atualizacao = date('Y-m-d H:i:s');

        $sql = "INSERT INTO usuarios (nome, senha, email, data_cadastro, data_atualizacao) 
                VALUES ('$nome', '$senha', '$email', NOW(), NOW())"; 
                
        if($conn->query($sql)){
            echo "<script> alert('Cadastro realizado com sucesso!'); location:href='index.php'</script>";
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE USUÁRIO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container mt-4">
        <h2>CADASTRO DE USUÁRIO</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">NOME:</label>
                <input type="text" class="form-control" name="nome" id="nome" required minlength="3" maxlength="255">
            </div>
            <div class="form-group">
                <label for="senha">SENHA:</label>
                <input type="password" class="form-control" name="senha" id="senha" required minlength="8">
            </div>
            <div class="form-group">
                <label for="email">EMAIL:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">CADASTRAR</button>
            <a href="index.php" class="btn btn-secondary">VOLTAR PARA O MENU</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Incluindo o JavaScript do Bootstrap no final do corpo para melhor desempenho -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <?php
        include "footer.php";
    ?>
</body>
</html>
