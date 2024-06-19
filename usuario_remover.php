<?php
    include 'conexao.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM usuarios WHERE usuario_id = '$id'";
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