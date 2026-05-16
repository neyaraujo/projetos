<?php 
    session_start();
    $_SESSION['nome'] = 'Franciney';
    $_SESSION['idade'] = 25;
    echo "Meu nome é {$_SESSION['nome']} e tenho   {$_SESSION['idade']} anos";
?>