<?php 

session_start();
require_once 'conexao.php';
$id_logado = $_SESSION['idusuario'];

if (isset($_POST['btn_cadastrar'])) {
    
    $linguagem = mysqli_real_escape_string($con, $_POST['linguagem']);
    $nivel = mysqli_real_escape_string($con, $_POST['nivel']);
    $idlinguagem = mysqli_real_escape_string($con, $_POST['idlinguagem']);



    if ($idlinguagem === '' && $linguagem !== '') {
        $sql = "INSERT INTO linguagens 
        (linguagem, nivel, idusuario)
        VALUES ('$linguagem', '$nivel', '$id_logado')";
        
        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = 'Linguagem cadastrada com sucesso';
            header('Location: ../cadastrar-linguagem.php');
            exit();
        }
    } elseif ($idlinguagem === '' && $linguagem === '') {
        $_SESSION['mensagem'] = 'Campo Nome da Linguagem está vazio';
        header('Location: ../cadastrar-linguagem.php');
        exit();
    } elseif ($idlinguagem !== '' && $linguagem !== '') {
        $sql = "UPDATE linguagens
        SET linguagem = '$linguagem',
        nivel = '$nivel'
        WHERE idlinguagem = '$idlinguagem'";
        
        if (mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = 'Atualização feita com sucesso!';
            header('Location:../cadastrar-linguagem.php');
            exit();
        }

    }
}
    
    mysqli_close($con);
?>