<?php
    
    // CONFIGURAÇÕES DO BANCO DE DADOS
    // Define dos dados necessários para realizar a conexão com MySQL

    $host       ="127.0.0.1";
    $user       = "root";
    $password   = "";
    $dbname     = "curriculo";

    // CONEXAO COM O BANCO
    // mysqli_connect() tenta estabelecer uma conexão com o servidor MySQL.
    // o retorno será armazeda na variável $conexao.
    // @con: oculta os erros n PHP, durante aprendizado é melhor evitar isso para enxegar os problemas mais facilmente.
    $con = mysqli_connect($host, $user, $password, $dbname);

    // TESTAR CONEXAO
    if(mysqli_connect_error()){
        echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error() . "</p>";
        exit;
    } else {
        // echo "<p>Conexão realizada com sucesso!</p>";
    }

?>