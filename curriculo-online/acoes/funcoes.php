<?php 
    
function saudacao(): string 
{
    date_default_timezone_set('america/Sao_Paulo');

    $hora = date('H');
    
    if ($hora >= 5 && $hora < 12) {
        return "Bom Dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa Tarde!";
    } else {
        return "Boa Noite!";
    }
}

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
        $artigo = 'o';
        echo " Seja Bem Vind" . $artigo . ", " . $nome. ".";
    } elseif ($genero == 'Feminino') {
        $artigo = 'a';
        echo " Seja Bem Vind" . $artigo . ", " . $nome. ".";
    }else {
        echo " Seja Bem Vindo(a), " . $nome. ".";
    }
}



?>