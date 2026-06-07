<?php 
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM historicos 
    WHERE idprofissao = '$idprofissao'";

    $resultado = mysqli_query($con, $sql);
?>