<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $id  = intval($_POST['usuario_id']);
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $data_atualizacao = date('Y-m-d H:i:s');

        $sql = "UPDATE usuarios
                SET nome = '$nome',
                    email = '$email',
                    data_atualizacao = NOW()
                WHERE usuario_id = $id";

        if($conn->query($sql) === TRUE) {
            echo "<script> alert('Atualização realizada com Sucesso!'); location.href = 'usuario_listar.php'; </script>";
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