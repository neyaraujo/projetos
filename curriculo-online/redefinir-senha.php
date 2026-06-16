<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinição de Senha</title>
</head>
<body>
    <input id="btn" onclick="enviarWhatsApp()" type="button" value="Enviar">
    <script>
        const telefone = "5598985508348";
        const btn = document.getElementById('btn');
        const mensagem = encodeURIComponent("Seu código de recuperação é: 583921");
        const url =  `https://wa.me/${telefone}?text=${mensagem}`;

        function enviarWhatsApp () {
            window.open(url, "_blank");
        };
    </script>
</body>
</html>