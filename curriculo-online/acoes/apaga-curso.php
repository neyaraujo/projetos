<?php 
    session_start();
    require_once 'conexao.php';
    include_once 'verifica-logado.php';

    if (isset($_POST['btn_apagar'])) {
        $idcurso = mysqli_real_escape_string($con, $_POST['idcurso']);

        $sql = "DELETE FROM cursos WHERE idcurso = '$idcurso'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Curso apagada com sucesso";
            unset($_SESSION['$idcurso']);
            header('Location: ../curso.php');
        } else {
            $_SESSION['mensagem'] = "Erro na exclusão da formacao!";
            header('Location: ../curso.php');
        }
        mysqli_close($con);

    }

?>