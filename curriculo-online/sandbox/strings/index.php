<?php 

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

    echo "Boa noite " . $pronome . $nome . ", seja bem vind" . $artigo ."!";

?>