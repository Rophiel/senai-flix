<?php
    session_start();

    //VERIFICA SE O USUÁRIO ESTÁ LOGADO
    if(isset($_SESSION["email"])){
        header("location: index.php");
        exit();
    }

    //VERIFICANDO SE O FORMULÁRIO FOI SUBMETIDO
    if($_SERVER['REQUEST_METHOD'] == TRUE){
        if(isset($_POST['email']) && isset($_POST['senha'])){
            //VALIDAÇÃO DAS CREDENCIAIS COM O BANCO DE DADOS 
            $email_valido = "email";
            $senha = "senha";

            //ESTÁ VERIFICANDO SE OS VALORES INSERIDOS NOS INPUT SÃO IGUAIS AOS VALORES ARMAZENADOS NAS VARIÁVEIS, VALORES DO BANCO DE DADOS
          if($_POST['email'] == $email_valido && $_POST['senha'] == $senha_valida){
                //SE CASO AS CREDENCIAIS NÃO ESTIVEREM CORRETAS
                $_SESSION['email'] = $email_valido;
                header('location: index.php');
                exit();
            } else {
                $erro = 'Usuário ou senha incorretos';
            }
        }
    }
