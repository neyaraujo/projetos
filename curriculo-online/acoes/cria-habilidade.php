<?php

    // iniciar uma nova sessão
    session_start();
    $id_logado = $_SESSION['idusuario'];

    // chamar nossa conexao
    require_once 'conexao.php';
    
    if(isset($_POST['btn_cadastrar'])) {
        
        if (isset($_SESSION['idhabilidade'])) {

            $idhabilidade = $_SESSION['idhabilidade'];
        
            $habilidade = mysqli_real_escape_string($con, $_POST['habilidade']);

            var_dump($habilidade);
            // exit();

            $sql = "UPDATE habilidades SET
            habilidade = '$habilidade'
            WHERE idhabilidade = '$idhabilidade'";
            if (mysqli_query($,con, $sql)) {
            
            }

            header('Location: ../cadastrar-habilidade.php');
            exit();
        }
        

        require_once 'consulta-habilidades-do-usuario.php';
        if ($resultado->num_rows >=3) {
            $_SESSION['mensagem'] = "No máximo 3 habilidades";
            header('Location: ../cadastrar-habilidade.php');
            exit();
        }

        // pegar os dados postados e fazer o escape
        $habilidade       = mysqli_real_escape_string($con, $_POST['habilidade']);
        // INSTRUÇÃO SQL
        $sql = "INSERT INTO habilidades (habilidade, idusuario) 
        VALUES ('$habilidade', '$id_logado')";

        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../cadastrar-habilidade.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar formação";
            $_SESSION['status']   = "danger";
            header('Location: ../cadastrar-habilidade.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }