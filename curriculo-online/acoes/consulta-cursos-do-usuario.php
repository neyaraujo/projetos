<?php 
    require_once 'verifica-logado.php';
    require_once 'conexao.php';
    
    $id_logado = $_SESSION['idusuario'];

    $sql =  "SELECT * FROM cursos 
            WHERE idusuario = '$id_logado'
            ORDER BY ano_curso DESC";

    $resultado = mysqli_query($con, $sql);

?>