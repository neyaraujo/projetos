<?php 

    session_start();

    $nome = "francisca das chagas araujo";
    // Primeira letra maiuscula
    $nome = ucfirst($nome);

    // Procurar o primeiro vazio
    $indice = strpos($nome, " ");

    //corta o texto e deixa apenas o primeiro nome
    $nome = substr($nome, 0, $indice );


    $idade = 60;
    $sexo = 'f';
    $pronome = '';
    $artigo = '';

    if($idade >=30 && $sexo == 'm') {
        $pronome = 'senhor ';
        $artigo = 'o';
    } elseif ($idade >=30 && $sexo == 'f') {
        $pronome = 'senhora ';
        $artigo = 'a';
    }

    // echo "Boa noite " . $pronome . $nome . ", seja bem vind" . $artigo ."!";



    function welcome() {
        $nome = $_SESSION['nome'];
        $idade = $_SESSION['idade'];
        $genero = $_SESSION['genero'];
        $pronome = '';
        $artigo = '';

        $nome = ucfirst($nome);
        $indice = strpos($nome, " ");
        $nome = substr($nome, 0, $indice );
        
        if($genero == 'Masculino') {
            $pronome = 'senhor ';
            $artigo = 'o';
        } elseif ($genero == 'Feminino') {
            $pronome = 'senhora ';
            $artigo = 'a';
            echo ", " . $pronome . $nome . ", Seja Bem Vind" . $artigo . "!";
        }
    }

    function contarString() {
        $texto = "Escola Fundamental de Ensino Médio Professor Rubem almeida";
        echo strlen($texto);
    }
    contarString();

?>