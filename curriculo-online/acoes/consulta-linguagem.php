<?php 

    $id_logado = $_SESSION['idusuario'];
    require_once 'conexao.php';

    $sql = "SELECT * FROM linguagens
    WHERE idusuario = '$id_logado'";

    $resultado = mysqli_query($con, $sql);


    if ($resultado->num_rows > 0) {
        $dados = mysqli_fetch_assoc($resultado);

        echo "<section class='linguagem'>
            <h2 class='linguagem__title'>
                LINGUAGENS DE PROGRAMAÇÃO
            </h2>";
        echo "<div class='linguagem__container'>";

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $idlinguagem = $dados['idlinguagem'];
            $linguagem = $dados['linguagem'];
            $nivel = $dados['nivel'];

            echo "<article class='linguagem__item'>
                <h3 class='linguagem__language'>
                    $linguagem:
                </h3>
                <small class='linguagem__small'>
                    $nivel
                </small>
                <div class='linguagem__bar'>
                    <div class='linguagem__progress " 
                        . transformaTexto($linguagem) . "'>
                    </div>
                </div>
                <p class='linguagem__nivel'>".
                    $nivel
                ."</p>";
                
            echo "</article>";
        }        
        
        echo "</div>";
        echo "</section>";

    }

    function removerAcentos(string $texto): string
{
    $acentos = [
        'á', 'à', 'ã', 'â', 'ä',
        'é', 'è', 'ê', 'ë',
        'í', 'ì', 'î', 'ï',
        'ó', 'ò', 'õ', 'ô', 'ö',
        'ú', 'ù', 'û', 'ü',
        'ç',
        'Á', 'À', 'Ã', 'Â', 'Ä',
        'É', 'È', 'Ê', 'Ë',
        'Í', 'Ì', 'Î', 'Ï',
        'Ó', 'Ò', 'Õ', 'Ô', 'Ö',
        'Ú', 'Ù', 'Û', 'Ü',
        'Ç'
    ];

    $semAcentos = [
        'a', 'a', 'a', 'a', 'a',
        'e', 'e', 'e', 'e',
        'i', 'i', 'i', 'i',
        'o', 'o', 'o', 'o', 'o',
        'u', 'u', 'u', 'u',
        'c',
        'A', 'A', 'A', 'A', 'A',
        'E', 'E', 'E', 'E',
        'I', 'I', 'I', 'I',
        'O', 'O', 'O', 'O', 'O',
        'U', 'U', 'U', 'U',
        'C'
    ];

    return str_replace($acentos, $semAcentos, $texto);
}

    function transformaTexto(string $texto): string
    {
        $texto = removerAcentos($texto);
        $texto = strtolower($texto);
        $texto =  preg_replace('/\s+/', '', $texto);
        
        return $texto;
    }

    // exit();
    

?>