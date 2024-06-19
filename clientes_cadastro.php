<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro: Clientes</title>
    <!-- Incluindo Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>
    <div class="container mt-4">
        <?php
            if(!empty($mensagem)){
                echo "<div class='alert alert-danger'>" . $mensagem . "</div>";
            }
        ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" name="nome" id="nome" minlength="3" required>
            </div>

            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" required>
            </div>

            <div class="form-group">
                <label for="endereco">ENDEREÇO</label>
                <input type="text" class="form-control" name="endereco" id="endereco" required>
            </div>

            <div class="form-group">
                <label for="bairro">BAIRRO</label>
                <input type="text" class="form-control" name="bairro" id="bairro" required>
            </div>

            <div class="form-group">
                <label for="cidade">CIDADE</label>
                <input type="text" class="form-control" name="cidade" id="cidade" required>
            </div>

            <div class="form-group">
                <label for="estado">ESTADO</label>
                <input type="text" class="form-control" name="estado" id="estado" required>
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep">
            </div>

            <div class="form-group">
                <label for="telefone">TELEFONE</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>

            <div class="form-group">
                <label for="data_cadastro">DATA CADASTRO</label>
                <input type="datetime-local" class="form-control" id="data_cadastro" name="data_cadastro" required value="<?php echo date('Y-m-d\TH:i:s'); ?>">
            </div>

            <button type="submit" class="btn btn-primary">CADASTRAR</button>

            <a href="index.php" class="btn btn-secondary">VOLTAR PARA O MENU</a>
        </form>
    </div>

    <!-- Incluindo o JavaScript do Bootstrap no final do corpo para melhor desempenho -->
    <script src="http
