<?php

    session_start();    //iniciar sessao
    require_once 'conexao.php'; //chamar conexao

    if(isset($_POST['btn_entrar'])){

        // pegar os dados postados e fazer o escape
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
        
        // CONSULTAR NO BANCO DE DADOS
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';";


        // EXECUTAR A INSTRUÇÃO SQL
        $resultado = mysqli_query($con, $sql);

        if(mysqli_affected_rows($con) > 0){
            //CRIAR ARRAY ASSOCICIATIVO COM O RESULTADO DA CONSULTA
            $dados = mysqli_fetch_array($resultado);
        
            // CRIAR VARIAVEIS DE SESSAO
            $_SESSION['mensagem'] = "Usuário logdo com sucesso!";
            $_SESSION['status'] = "success";
            $_SESSION['idusuario'] = $dados['idusuario'];
            $_SESSION['email'] = $dados['email'];
            header('Location: ../painel.php'); // REDIRECIONAR PARA O PAINEL
    
        } else {
            // CRIAR VARIAVEIS DE SESSAO
            $_SESSION['mensagem'] = "Erro no login! E-email ou senha incorretos";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');

        }
        mysqli_close($con); // fechar conexao
    }
?>