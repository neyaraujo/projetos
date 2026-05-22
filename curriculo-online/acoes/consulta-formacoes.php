<?php 
    require_once 'verifica-logado.php';
    require_once 'conexao.php';
    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM formacoes WHERE idusuario = '$id_logado'";

    $resultado = mysqli_query($con, $sql);

    while($dados = mysqli_fetch_array($resultado)) {
        $idformacao = $dados['idformacao'];
        $nivel = $dados['nivel'];
        $nome_curso = $dados['nome_curso'];
        $instituicao = $dados['instituicao'];
        $ano_inicio = $dados['ano_inicio'];
        $ano_termino = $dados['ano_termino'];
        $situacao = $dados['situacao'];
    }



?>