<?php 
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM profissoes 
    WHERE idusuario = '$id_logado'
    ORDER BY ano_saida DESC";

    $resultado = mysqli_query($con, $sql);
?>