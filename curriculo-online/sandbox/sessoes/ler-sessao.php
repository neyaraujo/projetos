<?php 
    session_start();
    echo "Meu nome é {$_SESSION['nome']} e tenho   {$_SESSION['idade']} anos";

?>