<?php
    include 'conexao.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM filmes WHERE filmes_id = '$id'";
        $resultado = $conn->query($sql);

        if($resultado){
            echo "<script> alert('Registro deletado com sucesso!'); location.href='index.php';</script>";
            exit();
        } else {
            echo "Erro ao deletar o registro";
        }
    }

    $conn->close();
?>  