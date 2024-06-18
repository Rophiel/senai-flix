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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2> CADASTRO DE USUÁRIO</h2>
    <form action="" method="post">
        <label for="name"> NOME: </label><br>
        <input type="text" name="nome" id="nome" required minlength="3" maxlength="255"><br>
        <label for="senha"> SENHA: </label><br>
        <input type="password" name="senha" id="senha" required minlength="8"><br>
        <label for="EMAIL"> EMAIL: </label><br>
        <input type="text" name="email" id="email" required><br>
        <input type="submit" value="CADASTRAR"><br>
        <a href="index.php"> VOLTAR PARA O MENU </a><br>
    </form>
</body>
</html>