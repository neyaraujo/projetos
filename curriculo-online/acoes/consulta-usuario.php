<?php 
    //inicia sessão n arquivo que chama a consulta
    require_once 'verifica-logado.php';

    session_start();

    require_once 'conexao.php';

    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id_logado'";

    $resultado  = mysqli_query($con, $sql);
    $dados      = mysqli_fetch_assoc($resultado);

    // cria variaveis para cada dado do array associativo

    $idusuario      = $dados['idusuario'];
    $nome           = $dados['nome'];
    $nacionalidade  = $dados['nacionalidade'];
    $estado_civil   = $dados['estado_civil'];
    $idade          = $dados['idade'];
    $endereco       = $dados['endereco'];
    $celular        = $dados['celular'];
    $email          = $dados['email'];
    $foto           = $dados['foto'];

    // CRIAR VARIAVEIS DE SESSAO
    $_SESSION['nome']           = $nome;
    $_SESSION['nacionalidade']  = $nacionalidade;
    $_SESSION['estado_civil']   = $estado_civil;
    $_SESSION['idade']          = $idade;
    $_SESSION['endereco']       = $endereco;
    $_SESSION['celular']        = $celular;
    $_SESSION['email']          = $email;
    $_SESSION['foto']           = $foto;

    // fecha o resultado da consulta
    mysqli_free_result($resultado);

    // fecha a conexão
    mysqli_close($con);

?>