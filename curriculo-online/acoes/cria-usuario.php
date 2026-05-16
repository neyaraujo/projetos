<?php 
// inicia uma nova sessão
  session_start();

  // chama nossa conexao
    require_once 'conexao.php';

    if(!isset($_POST['bt_cadastrar'])){
    echo "success";
    die();
        // pegar os dados postados e fazer o escape
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nome']);
        $estado_civil = mysqli_real_escape_string($con, $_POST['estado-civil']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $celular = mysqli_real_escape_string($con, $_POST['celular']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));




        // INSTRUÇÃO SQL
        $sql = "INSERT INTO usuarios ( nome, nacionalidade, estado_civil, idade, endereco, celular, email, senha) VALUE ('$nome', '$nacionalidade', '$estado_civil', '$idade', '$endereco', '$celular', '$email', '$senha')";
        
        //EXECUTAR INSTRUÇÃO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar!";
            $_SESSION['status'] = "danger";
            header('Location: ../index.php');
        }
        //FECHAR CONEXAO
        mysqli_close($con);
    }
        

?>