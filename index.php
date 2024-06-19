<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI FLIX</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/caveira-de-pirata.ico">
</head>
<body>

    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h3 class="mb-4">CLIENTES</h3>
                <a href="clientes_cadastro.php" class="btn btn-primary btn-lg btn-block mb-2">CADASTRAR CLIENTE</a>
                <a href="clientes_listar.php" class="btn btn-secondary btn-lg btn-block mb-4">LISTAR CLIENTES</a>

                <h3 class="mb-4">FILMES</h3>
                <a href="filmes_cadastro.php" class="btn btn-primary btn-lg btn-block mb-2">CADASTRAR FILME</a>
                <a href="filmes_listar.php" class="btn btn-secondary btn-lg btn-block mb-4">LISTAR FILMES</a>

                <h3 class="mb-4">ASSINATURA</h3>
                <a href="assinaturas_cadastro.php" class="btn btn-primary btn-lg btn-block mb-2">CADASTRAR ASSINATURA</a>
                <a href="assinaturas_listar.php" class="btn btn-secondary btn-lg btn-block mb-4">LISTAR ASSINATURAS</a>

                <h3 class="mb-4">USUÁRIO</h3>
                <a href="usuario_cadastrar.php" class="btn btn-primary btn-lg btn-block mb-2">CADASTRAR USUÁRIO</a>
                <a href="usuario_listar.php" class="btn btn-secondary btn-lg btn-block">LISTAR USUÁRIOS</a>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
