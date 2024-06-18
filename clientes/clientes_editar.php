<?php

    include 'conexao.php';
    
    //VERIFICA SE FOI PASSADO UM ID VIA GET 
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);

        //CRIANDO A QUERY IRÁ EXECUTAR O COMANDO DE SELECIONAR TODOS OS DADOS DE CLIENTES DO ID ESPECÍFICADO
        $sql = "SELECT * FROM clientes WHERE cliente_id = '$id'";

        $resultado = $conn->query($sql);

        //IRÁ VERIFICAR SE O NÚMERO DE LINHAS OU REGISTROS É MAIOR QUE 0
        if($resultado->num_rows > 0){
            $row = $resultado->fetch_assoc();
        } else {
            echo "Não há registros";
            exit();
        }

    } else {
        //SE NÃO APARECER NENHUM VALOR PARA SER PEGO, IRÁ MOSTRAR COMO ID NÃO ESPECÍFICADO
        echo "ID do cliente não fornecido";
        exit();
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CLIENTE</title>
</head>
<body>
    <h2> EDITAR CLIENTES </h2>
    <!--TENHO QUE COLOCAR NO ACTION O ENDERECO DE ARQUIVO QUE IRÁ EXECUTAR A AÇÃO DE SALVAR-->
    <!-- ESSE FORMULÁRIO IRÁ PEGAR O VALOR QUE JÁ ESTÁ CADASTRO NO BANCO DE DADOS E DEIXARÁ A MOSTRA PARA SER EDITADO -->
    <form action="clientes_editar_salvar.php" method="POST">
        <input type="hidden" name="cliente_id" value="<?php echo $row['cliente_id']; ?>"><br>
        <label for="nome"> NOME: </label><br>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>"><br>
        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" value="<?php echo htmlspecialchars($row['cpf']); ?>"><br>
        <label for="endereco">ENDERECO</label><br>
        <input type="text" name="endereco" value="<?php echo htmlspecialchars($row['endereco']); ?>"><br>
        <label for="bairro">BAIRRO</label><br>
        <input type="text" name="bairro" value="<?php echo htmlspecialchars($row['bairro']); ?>"><br>
        <label for="cidade">CIDADE</label><br>
        <input type="text" name="cidade" value="<?php echo htmlspecialchars($row['cidade']); ?>"><br>
        <label for="estado">ESTADO</label><br>
        <input type="text" name="estado" value="<?php echo htmlspecialchars($row['estado']); ?>"><br>
        <label for="cep">CEP</label><br>
        <input type="text" name="cep" value="<?php echo htmlspecialchars($row['cep']); ?>"><br>
        <label for="email">EMAIL</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"><br>
        <label for="telefone">TELEFONE</label><br>
        <input type="text" name="telefone" value="<?php echo htmlspecialchars($row['telefone']); ?>"><br>
        <input type="submit" value="SALVAR"> 
    </form>
</body>
</html>