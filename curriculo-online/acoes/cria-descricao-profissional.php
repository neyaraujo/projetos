<?php

    // iniciar uma nova sessão
    session_start();
    $id_logado = $_SESSION['idusuario'];

    // chamar nossa conexao
    require_once 'conexao.php';

    // verifica se botão foi clicado
    if (isset($_POST['btn_cadastrar'])) {
        $idprofissao = mysqli_real_escape_string($con, $_POST['idprofissao']);
        $nome_profissao = mysqli_real_escape_string($con, $_POST['nome_profissao']);
        $descricao = mysqli_real_escape_string($con, $_POST['descricao']);

        if ($idprofissao === '') {
            if ($nome_profissao === '') {
                $_SESSION['mensagem'] = 'Campo habilidade está vazio';
                header('Location: ../cadastrar-descricao-profissional.php');
                exit();
            } else {
                // CONSULTA
                $sql = "SELECT * FROM profissoes
                WHERE idusuario = '$id_logado'";

                $resultado = mysqli_query($con, $sql);

                if ($resultado->num_rows >=5) {
                    $_SESSION['mensagem'] = 'So é possível 5 cadastros';
                    header('Location: ../cadastrar-descricao-profissional.php');
                    exit();

                } else {//CADASTRA
                    $sql = "INSERT INTO profissoes (nome_profissao, descricao,idusuario)
                    VALUES ('$nome_profissao', '$descricao', '$id_logado')";

                    mysqli_query($con, $sql);
                    unset($idprofissao);
                    header('Location: ../cadastrar-descricao-profissional.php');
                }

                var_dump($resultado);
                exit();
            }

        var_dump($nome_profissao);


        } else {
            if ($nome_profissao === '') {
                $sql = "DELETE FROM profissoes
                WHERE idprofissao = '$idprofissao'";
                mysqli_query($con, $sql);
                unset($idprofissao);
                header('Location: ../cadastrar-descricao-profissional.php');
                exit();
            } else {
                $sql = "UPDATE profissoes SET
                nome_profissao = '$nome_profissao',
                idusuario = '$id_logado'
                WHERE idprofissao = '$idprofissao'";

                mysqli_query($con, $sql);
                unset($idprofissao);
                header('Location: ../cadastrar-descricao-profissional.php');
                exit();
            }
        }

    }    
    
    

       