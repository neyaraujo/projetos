<?php 

// $_SESSION['mensagem'] = ['nome'];
// $_SESSION['status'] = ['idade'];

    if(isset($_SESSION['mensagem'])){

        echo $_SESSION['mensagem'];

    }
        
    session_unset();
?>