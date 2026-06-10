<?php 
    session_start();
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    if(isset($_POST['btn_editar'])) {

        $idcurso        = mysqli_real_escape_string($con, $_POST['idcurso']);
        $nome_curso     = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao    = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_curso      = mysqli_real_escape_string($con, $_POST['ano_curso']);
        $descricao      = mysqli_real_escape_string($con, $_POST['descricao']);
        


        $sql = "UPDATE cursos SET
        nome_curso          = '$nome_curso',
        instituicao         = '$instituicao',
        ano_curso           = '$ano_curso',
        descricao           = '$descricao'
        WHERE idcurso       = '$idcurso'";

        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Curso editado com sucesso!";
            header('Location: ../curso.php');
        } else {
            $_SESSION['mensagem'] = "Erro na edição do Curso!";
            header('Location: ../curso.php');
        }  
        mysqli_close($con);
    }

?>