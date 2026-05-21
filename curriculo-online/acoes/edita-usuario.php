<?php 
    session_start();
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    if(isset($_POST['btn_atualizar'])){
        // criar variaveis e pegar dados para atualizar
        $idusuario      = $_SESSION['idusuario'];
        $nome           = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade  = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil   = mysqli_real_escape_string($con, $_POST['estado-civil']);
        $idade          = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco       = mysqli_real_escape_string($con, $_POST['endereco']);
        $celular        = mysqli_real_escape_string($con, $_POST['celular']);
        $email          = mysqli_real_escape_string($con, $_POST['email']);
        $foto          = mysqli_real_escape_string($con, $_FILES['foto']['name']);
        $tipo          = $_FILES['foto']['tmp_name'];

        //UPLOAD da foto do perfil
        include_once 'upload.php';

        $sql = "UPDATE usuarios SET
            nome            = '$nome',
            nacionalidade   = '$nacionalidade',
            estado_civil    = '$estado_civil',
            idade           = '$idade',
            endereco        = '$endereco',
            celular         = '$celular',
            email           = '$email',
            foto            = '$foto' 
            WHERE idusuario = '$idusuario'";

        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = 'Perfil atualizado com sucesso';
            $_SESSION['status'] = 'success';
            // redirecionamento

            header('Location: ../perfil.php');
        }else {
            $_SESSION['mensagem'] = 'Não foi possível atualizar o perfil!';
            $_SESSION['status'] = 'danger';
            header('Location: ../perfil.php');
        }
    } // fim if isset
?>