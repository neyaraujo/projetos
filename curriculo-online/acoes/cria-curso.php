<?php 
    session_start();

    require_once 'conexao.php';

    if (isset($_POST['btn_cadastrar'])) {
        $nome_curso = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_curso = mysqli_real_escape_string($con, $_POST['ano_curso']);
        $idusuario = mysqli_real_escape_string($con, $_POST['idusuario']);
        $descricao_01 = mysqli_real_escape_string($con, $_POST['descricao_01']);
        $descricao_02 = mysqli_real_escape_string($con, $_POST['descricao_02']);
        $descricao_03 = mysqli_real_escape_string($con, $_POST['descricao_03']);

        $sql = "INSERT INTO cursos (
        nome_curso, instituicao, ano_curso, idusuario, descricao_01, descricao_02, descricao_03)
        VALUES
        ('$nome_curso', '$instituicao', '$ano_curso', '$idusuario', '$descricao_01', '$descricao_02', '$descricao_03')";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../curso.php');
            } else {
                $_SESSION['mensagem'] = "Não foi possível cadastrar curso";
                $_SESSION['status'] = "danger";
                header('Location: ../curso.php');
        }
        mysqli_close($con);

    }

?>