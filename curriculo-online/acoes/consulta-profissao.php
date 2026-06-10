<?php 

    require_once 'conexao.php';

    if (isset($_GET['id'])) {
        $idprofissao = $_GET['id'];
        
        $sql = "SELECT * FROM profissoes
        WHERE idprofissao = '$idprofissao'";

        $resultado = mysqli_query($con, $sql);

        $dados = mysqli_fetch_assoc($resultado);

        $idprofissao        = $idprofissao;
        $profissao          = $dados['profissao'];
        $instituicao        = $dados['instituicao'];
        $cidade             = $dados['cidade'];
        $estado                 =$dados['estado'];
        $ano_entrada        = $dados['ano_entrada'];
        $ano_saida          = $dados['ano_saida'];
        $descricao          = $dados['descricao'];
        
        mysqli_close($con);

    }

?>