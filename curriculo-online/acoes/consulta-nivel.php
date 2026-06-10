<?php 

    $sql = "SELECT * FROM linguagens
    WHERE idusuario = '$id_logado'";
    
    $resultado = mysqli_query($con, $sql);

        function nivelPorcentagem($nivel) 
        {
            return match ($nivel) {
                'basico' => '25%',
                'intermediario' => '50%',
                'avancado' => '75%',
                'experiente' => '100%',
                default => '0%'
            };
        }

        function transformarTexto(string $texto): string
        {
            $texto = removeAcentos($texto);
            $texto = removeEspacos($texto);
            return $texto;
        }

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $nivel = transformarTexto($dados['nivel']);
            $nivel = nivelPorcentagem($nivel);

            $linguagem = removeEspacos($dados['linguagem']);
            $linguagem = transformarTexto($dados['linguagem']);
            // echo "<pre>";
            echo "
                .linguagem__progress." . $linguagem .  "{
                width: $nivel;
                height: 5pt;
                background-color: #7a9f00;
            }";
        }
        echo "
            .linguagem__nivel {
            font-size: 10pt;
        } 
        ";




        function removeEspacos(string $texto): string
        {
            $texto = strtolower($texto);
            $texto =  preg_replace('/\s+/', '', $texto);
        
            return $texto;
        }

        function removeAcentos (string $texto)
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
    

?>