<?php
    // iniciar sessao no arquivo que chama a consulta
    require_once 'verifica-logado.php';
    require_once "conexao.php";
    $id_logado = $_SESSION['idusuario'];
    
    // PEGAR O ID DO CURSO

    if(isset($_GET['id'])) {

    $idcurso = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM cursos WHERE idcurso = '$idcurso'";
    //echo "$sql";

    $resultado = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($resultado);
    
    // criar variaveis para cada dado do array associativo
    $id_curso           = $dados['idcurso'];
    $nome_curso         = $dados['nome_curso'];
    $instituicao        = $dados['instituicao'];
    $ano_curso          = $dados['ano_curso'];
    $descricao          = $dados['descricao'];


        // escrever em tela nos campos do formulario
        
    } // fim if pegar ID