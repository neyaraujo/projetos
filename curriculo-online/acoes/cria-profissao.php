<?php 
    session_start();
    require_once 'conexao.php';
    $id_logado = $_SESSION['idusuario'];

    if (isset($_POST['btn_cadastrar'])) {
        $nome_profissao = mysqli_real_escape_string($con, $_POST['nome_profissao']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
        $estado = mysqli_real_escape_string($con, $_POST['estado']);
        $ano_entrada = mysqli_real_escape_string($con, $_POST['ano_entrada']);
        $ano_saida = mysqli_real_escape_string($con, $_POST['ano_saida']);
        $descricao = mysqli_real_escape_string($con, $_POST['descricao']);


        $sql = "INSERT INTO profissoes (

            nome_profissao, instituicao, cidade, estado, ano_entrada, ano_saida, descricao, idusuario)
            VALUES 
            ('$nome_profissao', '$instituicao', '$cidade', '$estado', '$ano_entrada', '$ano_saida', '$descricao', '$id_logado')";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../profissao.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar curso";
            $_SESSION['status'] = "danger";
            header('Location: ../profissao.php');
        }
        mysqli_close($con);


    }   

?>