<?php 
    session_start();
    require_once 'conexao.php';
    include_once 'verifica-logado.php';

    if (isset($_POST['btn_apagar'])) {
        $idformacao = mysqli_real_escape_string($con, $_POST['idformacao']);

        $sql = "DELETE FROM formacoes WHERE idformacao = '$idformacao'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Formação apagada com sucesso";
            unset($_SESSION['$idformacao']);
            header('Location: ../formacao.php');
        } else {
            $_SESSION['mensagem'] = "Erro na exclusão da formacao!";
            header('Location: ../formacao.php');
        }
        mysqli_close($con);

    }

?>