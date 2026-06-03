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
        $descricao_01 = mysqli_real_escape_string($con, $_POST['descricao_01']);
        $descricao_02 = mysqli_real_escape_string($con, $_POST['descricao_02']);
        $descricao_03 = mysqli_real_escape_string($con, $_POST['descricao_03']);

        $sql = "INSERT INTO profissoes (

            nome_profissao, instituicao, cidade, estado, ano_entrada, ano_saida, descricao_01, descricao_02, descricao_03, idusuario)
            VALUES 
            ('$nome_profissao', '$instituicao', '$cidade', '$estado', '$ano_entrada', '$ano_saida', '$descricao_01', '$descricao_02', '$descricao_03', $id_logado)";

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