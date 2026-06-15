<?php 
    require_once 'acoes/verifica-logado.php';

    require_once 'acoes/consulta-usuario.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Gerador de QR Code</title>
</head>
<body>

<style>
    .qrcod__container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .qrcod__image {
        text-align: center;
    }
    .qrcod__text {
        color: #007183;
    }
</style>

<input type="hidden" id="celular" placeholder="Digite o celular" value="<?= $celular ?>">

<div class="qrcod__container">
    <img class="qrcod__image" id="qrcode" width="200px">
    <h3 class="qrcod__text">whatzap</h3>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<script>




    let celular = document.getElementById("celular").value;

    if (celular.value !== '') {
        let link = "https://wa.me/55" + celular;

        document.getElementById("qrcode").src =
            "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" 
            + encodeURIComponent(link);
    }




</script>

</body>
</html>