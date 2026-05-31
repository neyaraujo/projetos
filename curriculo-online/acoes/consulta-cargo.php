<?php 
    //inicia sessão n arquivo que chama a consulta
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM cargos WHERE idusuario = '$id_logado'";
    $resultado  = mysqli_query($con, $sql);
    $dados      = mysqli_fetch_assoc($resultado);

    if ($dados == NULL) {
        $sql2 = "INSERT INTO 
            cargos (nome, perfil, idusuario)
            VALUES ('Auxiliar Administrativo', '', '$id_logado')";
            $ok2 = mysqli_query($con, $sql2);
    } else {

        $idcargo        = $dados['idcargo'];
        $cargo          = $dados['nome'];
        $perfil         = $dados['perfil'];

        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['idcargo']    = $idcargo;
        $_SESSION['cargo']      = $cargo;
        $_SESSION['perfil']     = $perfil;

    // fecha o resultado da consulta
    mysqli_free_result($resultado);

    // fecha a conexão
    // mysqli_close($con);
    }

?>