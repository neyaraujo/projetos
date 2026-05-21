<?php 
    if(isset('btn_enviar')) {
        $tipos_permitidos = ['jpg', 'jpeg'];
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        // ver array de tipos existe a extensao do arquivo
        if(in_array($extensao,$tipos_permitidos)){
            $pasta = "arquvios/";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post">
        <input type="file" name="arquivo" id="foto" enctype="multipart/form-data">
        <button name="btn_enviar" type="submit">Enviar</button>
    </form>
</body>
</html>