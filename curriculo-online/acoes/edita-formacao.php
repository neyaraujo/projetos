<?php 
    session_start();
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    if(isset($_POST['btn_editar'])) {

        $nivel          = mysqli_real_escape_string($con, $_POST['nivel']);
        $nome_curso     = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao    = mysqli_real_escape_string($con, $_POST['instituicao']);
        $situacao       = mysqli_real_escape_string($con, $_POST['situacao']);
        $ano_inicio     = mysqli_real_escape_string($con, $_POST['ano_inicio']);
        $ano_termino    = mysqli_real_escape_string($con, $_POST['ano_termino']);
        $idformacao    = mysqli_real_escape_string($con, $_POST['idformacao']);


        $sql = "UPDATE formacoes SET
        nivel       = '$nivel',
        nome_curso  = '$nome_curso',
        instituicao = '$instituicao',
        situacao    = '$situacao',
        ano_inicio  = '$ano_inicio',
        ano_termino = '$ano_termino'
        WHERE idformacao  = '$idformacao'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Formacao editada com sucesso!";
            header('Location: ../formacao.php');
        } else {
            $_SESSION['mensagem'] = "Erro na edição da formação!";
            header('Location: ../formacoes.php');
        }  
        mysqli_close($con);
    }

?>