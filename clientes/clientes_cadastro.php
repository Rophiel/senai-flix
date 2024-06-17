<?php
    //FUNÇÃO DE CADASTRO
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
        $sql = "INSERT into clientes (nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro) values ('$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado','$cep', '$email','$telefone', NOW(), NOW())";
        
        if($conn->query($sql) === TRUE){
            echo "window.alert('Cadastro realizado com sucesso!')";
            header("Location: index.php");
            exit(); //GARANTE QUE O SCRIPT SEJA ENCERRADO APÓS O REDIRECIONAMENTO
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

      <!-- FUNÇÃO DE INSERÇÃO DE DADOS -->
    <form action="" method="POST">

        <label for="nome">NOME</label><br>
        <input type="text" name="nome" id="nome" minlength="3" required><br>
        <br>
        <label for="email">EMAIL</label><br>
        <input type="text" name="email" id="email"><br>
        <br>
        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" id="cpf" required><br>
        <br>
        <label for="endereco">ENDERECO</label><br>
        <input type="text" name="endereco" id="endereco" required><br>
        <br>
        <label for="bairro">BAIRRO</label><br>
        <input type="text" name="bairro" id="bairro" required><br>
        <br>
        <label for="cidade">CIDADE</label><br>
        <input type="text" name="cidade" id="cidade" required><br>
        <br>
        <label for="estado">ESTADO</label><br>
        <input type="text" name="estado" id="estado" required><br>
        <br>
        <label for="cep">CEP</label><br>
        <input type="text" name="cep" id="cep"><br>
        <br>
        <label for="telefone">TELEFONE</label><br>
        <input type="text" name="telefone" id="telefone"><br>
        <br>
        <label for="data"> DATA CADASTRO </label><br>
        <input type="date" id="data_cadastro" name="data_cadastro" required value="<?php echo date ('Y-m-d H:i:s') ?>"><br>
        <br>
        <input type="submit" value="CADASTRAR"><br>

        <a href="index.php"> VOLTAR PARA O MENU </a>
    </form>
</body>
</html>