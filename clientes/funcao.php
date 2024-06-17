<?php
    include 'conexao.php';

    //funções

    //função de cadastrar
    function cadastrarUsuarios($nome,$cpf,$endereco,$bairro,$cidade,$estado,$cep,$email,$telefone, $data_cadastro, $data_atualizacao) {

        global $conn; //TORNA A CONEXÃO DISPONÍVEL DENTRO DA FUNÇÃO

        $sql = "INSERT INTO usuarios (nome,cpf,endereco,bairro,cidade,estado,cep,email,telefone, data_cadastro, data_atualizacao) VALUES
        ($nome,$cpf,$endereco,$bairro,$cidade,$estado,$cep,$email,$telefone, $data_cadastro, $data_atualizacao)";

        if($conn->query($sql) === TRUE) {
            echo "<script>alert('Cadastro Realizado com Sucesso!')</script>";
            echo "<script>location.href = ?page = 'index.php' </script>";
        } else {
            echo "<script>alert('Erro ao realizar cadastro!')</script>";
            echo "<script>location.href = ?page = 'index.php' </script>";
        }
    }

    function listarUsuario(){
        
        global $conn; //TORNA A CONEXÃO DISPONÍVEL DENTRO DA FUNÇÃO

        $sql = "SELECT cliente_id, nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro, data_atualizacao FROM clientes";
        
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<th>' . $row['cliente_id'] . '</th>';
                    echo '<th>' . $row['nome'] . '</th>';
                    echo '<th>' . $row['cpf'] . '</th>';
                    echo '<th>' . $row['endereco'] . '</th>';
                    echo '<th>' . $row['bairro'] . '</th>';
                    echo '<th>' . $row['cidade'] . '</th>';
                    echo '<th>' . $row['estado'] . '</th>';
                    echo '<th>' . $row['cep'] . '</th>';
                    echo '<th>' . $row['email'] . '</th>';
                    echo '<th>' . $row['telefone'] . '</th>';
                    echo '<th>' . $row['data_cadastro'] . '</th>';
                    echo '<th>' . $row['data_atualizacao'] . '</th>';
                    echo '<a href="clientes_editar.php?id=' . $row['cliente_id'] . '" class="btn btn-primary btn-sm">Editar</a> ';
                    echo '<a href="clientes_remover.php?id=' . $row['cliente_id'] . '" class="btn btn-primary btn-sm">Remover</a> ';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="12">Nenhum cliente encontrado</td></tr>';
        }
    }
?>