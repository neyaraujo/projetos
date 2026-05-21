<?php 
    
function saudacao(): string 
{
    date_default_timezone_set('america/Sao_Paulo');

    $hora = date('H');
    
    if ($hora >= 5 && $hora < 12) {
        return "Bom dia";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde";
    } else {
        return "Boa noite";
    }
}

?>