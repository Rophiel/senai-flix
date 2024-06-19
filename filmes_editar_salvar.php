<?php
    include 'conexao.php';

    //VERIFICANDO SE O FORMULÁRIO ESTÁ SENDO SUBMETIDO VIA POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = intval($_POST['filmes_id']);
        $titulo = htmlspecialchars($_POST['titulo']);
        $descricao = htmlspecialchars($_POST['descricao']);
        $ano_lancamento = date('Y-m-d H:i:s');
        $genero = htmlspecialchars($_POST['genero']);
        $classificacao = htmlspecialchars($_POST['classificacao']);

        //CRIANDO A QUERY PARA ATUALIZAR OS DADOS DO BANCO
        $sql = "UPDATE filmes 
                SET titulo = '$titulo',
                    descricao = '$descricao',
                    ano_lancamento = '$ano_lancamento',
                    genero = '$genero',
                    classificacao = '$classificacao',
                    data_atualizacao = NOW()
                WHERE filmes_id = $id";

        if($conn->query($sql) == TRUE) {
            echo "<script>alert('Atualização realizada com sucesso'); location.href='filmes_listar.php'</script>";
            exit();
        } else {
            echo "Erro ao atualizar o cadastro" . $conn->error;
        }

    } else {
        echo "Metódo não permitido para acessar o formulário";
        exit();
    }

    $conn->close();

?>