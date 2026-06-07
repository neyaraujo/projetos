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


        $sql = "INSERT INTO profissoes (

            nome_profissao, instituicao, cidade, estado, ano_entrada, ano_saida, idusuario)
            VALUES 
            ('$nome_profissao', '$instituicao', '$cidade', '$estado', '$ano_entrada', '$ano_saida', $id_logado)";

            var_dump($sql);

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../historico-profissional.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar curso";
            $_SESSION['status'] = "danger";
            header('Location: ../historico-profissional.php');
        }
        mysqli_close($con);


    }   

?>