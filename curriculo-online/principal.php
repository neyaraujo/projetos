
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Principal</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/principal.css">
</head>
<body>

    <?php require_once "header.php"?>

    <main class="home">
        <section class="home-container">
            <div class="home-bg">
                <!-- background -->
            </div>
            <div class="home-text card-primary">
                <h4 class="home-h4">Seja um profissional preparado!</h4>
                <h1 class="home-h1">ATUALIZE SEU CURRÍCULO</h1>
                <a class="btn-primary" href="#">Atualizar Perfil</a>
            </div>
        </section>
        <section class="cardes">
            <article class="item shadow item-primary">
                <h1>Cadastrar Formações</h1>
                <p>
                    Faça o cadastro completo das suas formações.
                </p>
                <a class="btn-primary" href="">Cadastrar</a>
            </article>
            <article class="item shadow item-primary">
                <h1>cadastre seus Cursos</h1>
                <p>
                    Configure a sua conta.
                </p>
                <a class="btn-primary" href="">Cadastrar</a>
            </article>
                        <article class="item shadow item-primary">
                <h1>Configurações</h1>
                <p>
                    Configure a sua conta.
                </p>
                <a class="btn-primary" href="">Configurar</a>
            </article>
        </section>
    </main>

<?php require_once "footer.php"?>
<script src="assets/js/header.js"></script>

</body>
</html>