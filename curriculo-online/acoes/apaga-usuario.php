<?php 
    session_start();
    require_once 'conexao.php';
    include_once 'verifica-logado.php';

    if (isset($_POST['btn_apagar'])) {
        $idusuario = mysqli_real_escape_string($con, $_POST['idusuario']);

        $sql = "DELETE FROM usuarios WHERE idusuario = '$idusuario'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Usuário apagado com sucesso";
            unset($_SESSION['idusuario']);
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Erro na exclusão do perfil!";
            header('Location: ../configuracoes.php');
        }
        mysqli_close($con);

    }

?>