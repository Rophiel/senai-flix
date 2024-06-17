<?php
include 'conexao.php';

// ELE IRÁ VERIFICAR SE O FORMULÁRIO DE EDITAR FOI REQUISITADO PELO MÉTODO POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // CRIANDO AS VARIÁVEIS QUE IRÃO RECEBER OS VALORES DO FORMULÁRIO
    $id = intval($_POST['cliente_id']);
    $nome = htmlspecialchars($_POST['nome']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $bairro = htmlspecialchars($_POST['bairro']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $estado = htmlspecialchars($_POST['estado']);
    $cep = htmlspecialchars($_POST['cep']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);

    // Criando a query
    // ESSA QUERY IRÁ SER RESPONSÁVEL POR ATUALIZAR OS DADOS DA TABELA CLIENTES DO ID ESPECÍFICADO
    $sql = "UPDATE clientes 
            SET nome = '$nome', 
                cpf = '$cpf', 
                endereco = '$endereco', 
                bairro = '$bairro', 
                cidade = '$cidade', 
                estado = '$estado',
                cep = '$cep',
                email = '$email', 
                telefone = '$telefone',
                data_atualizacao = NOW()
            WHERE cliente_id = $id";

    // EXECUTAR A QUERY SQL
    if ($conn->query($sql) === TRUE) {
        header("Location: clientes_listar.php"); // IRÁ SER REDIRECIONADO A ESSA PÁGINA CASO FOR CONCLUÍDO COM SUCESSO
        echo "window.alert('Atualização realizada com sucesso!')";
        exit();
    } else {
        echo "Erro ao atualizar cadastro: " . $conn->error;
    }

    $conn->close(); // FECHAR A CONEXÃO COM O BANCO DE DADOS

} else {
    echo 'Método não permitido para processar o formulário.';
    exit();
}
?>
