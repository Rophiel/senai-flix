<?php
    include 'conexao.php'; //CONEXÃO COM O BANCO DE DADOS

    //VERIFICAND SE FOI REQUISITADO PELO METÓDO POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = htmlspecialchars($_POST['nome']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $endereco = htmlspecialchars($_POST['endereco']);
        $bairro = htmlspecialchars($_POST['bairro']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $estado = htmlspecialchars($_POST['estado']);
        $cep = htmlspecialchars($_POST['cep']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $data_cadastro = date('Y-m-d H:i:s');
        $data_atualizacao = date('Y-m-d H:i:s');

        //CRIANDO QUERY
        $sql = "INSERT into clientes (nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro) values ('$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado','$cep', '$email','$telefone', '$data_cadastro')";
        
        if($conn->query($sql) === TRUE){
            $mensagem = "Cadastro realizado com sucesso!";
        } else {
            $mensagem = "Erro:" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro: Clientes</title>
</head>
<body>

    <?php
      if(!empty($mensagem)){
        echo "<p>". $mensagem ."</p>";
      }
    ?>

    <form action="" method="POST">

        <label for="nome">NOME</label><br>
        <input type="text" name="nome" id="nome"><br>
        <br>
        <label for="email">EMAIL</label><br>
        <input type="text" name="email" id="email"><br>
        <br>
        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" id="cpf"><br>
        <br>
        <label for="endereco">ENDERECO</label><br>
        <input type="text" name="endereco" id="endereco"><br>
        <br>
        <label for="bairro">BAIRRO</label><br>
        <input type="text" name="bairro" id="bairro"><br>
        <br>
        <label for="cidade">CIDADE</label><br>
        <input type="text" name="cidade" id="cidade"><br>
        <br>
        <label for="estado">ESTADO</label><br>
        <input type="text" name="estado" id="estado"><br>
        <br>
        <label for="cep">CEP</label><br>
        <input type="text" name="cep" id="cep"><br>
        <br>
        <label for="telefone">TELEFONE</label><br>
        <input type="text" name="telefone" id="telefone"><br>
        <br>
        <label for="data"> DATA CADASTRO </label><br>
        <input type="date" id="data_cadastro" name="data_cadastro"><br>
        <br>
        <input type="submit" value="CADASTRAR"><br>

    </form>
</body>
</html>