<?php
$mensagem = "";

if(isset($_POST['enviar'])) {
    $mensagem = "Cadastro realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Modal PHP</title>

<style>

body{
    font-family: Arial;
}

/* Fundo escuro */
.modal{
    display: none;

    position: fixed;
    top: 0;
    left: 0;

    width: 100%;
    height: 100vh;

    background: rgba(0,0,0,0.5);

    justify-content: center;
    align-items: center;
}

/* Caixa da modal */
.modal__box{
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    text-align: center;
}

button{
    padding: 10px 20px;
    cursor: pointer;
}

</style>
</head>
<body>

<form method="post">
    <button type="submit" name="enviar">
        Enviar
    </button>
</form>

<!-- Modal -->
<div class="modal" id="modal">

    <div class="modal__box">

        <h2>Mensagem</h2>

        <p><?= $mensagem ?></p>

        <button onclick="fecharModal()">
            Fechar
        </button>

    </div>

</div>

<script>

const modal = document.getElementById("modal");

function fecharModal() {
    modal.style.display = "none";
}

<?php if($mensagem != ""): ?>

    modal.style.display = "flex";

<?php endif; ?>

</script>

</body>
</html>