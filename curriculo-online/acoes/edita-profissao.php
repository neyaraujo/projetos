<?php 

    require_once 'conexao.php';

    if (isset($_POST['btn_editar'])) {

        $idprofissao = mysqli_real_escape_string($con, $_POST['idprofissao']);
        $profissao = mysqli_real_escape_string($con, $_POST['profissao']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
        $estado = mysqli_real_escape_string($con, $_POST['estado']);
        $ano_entrada = mysqli_real_escape_string($con, $_POST['ano_entrada']);
        $ano_saida = mysqli_real_escape_string($con, $_POST['ano_saida']);
        $descricao = mysqli_real_escape_string($con, $_POST['descricao']);
        
        
        $sql =  "UPDATE profissoes SET
        profissao           = '$profissao',
        instituicao         = '$instituicao',
        cidade              = '$cidade',
        estado              = '$estado',
        ano_entrada         = '$ano_entrada',
        ano_saida           = '$ano_saida',
        descricao           = '$descricao'
        WHERE idprofissao   = '$idprofissao'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Histórico editado com sucesso!";
            header('Location: ../profissao.php');

        } else {
            $_SESSION['mensgaem'] = "Não foi possível atualizar o cadastro";
            header('Location: ../profissao.php');
        }
        
        mysqli_close($con);
    }




    

?>