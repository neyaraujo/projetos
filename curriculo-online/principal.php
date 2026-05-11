<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Painel Responsivo</title>
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<link rel="stylesheet" href="assets/css/style-principal.css">
<link rel="stylesheet" href="assets/css/global.css">
</head>
<body>

<?php include_once 'header.php'?>
<section class="hero">

    <h1>Atualize seu currículo</h1>
    <p>Mantenha seus dados sempre atualizados</p>

    <div class="carousel">
        <div class="slides">
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200">
                <div class="caption">
                    <a href="">Atualizar Perfil</a>
                </div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200">
                <div class="caption">
                    
                    <h2>Cursos</h2>
                </div>
            </div>

            <div class="slide">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200">
                <div class="caption">
                    <h2>Sistemas Back-End</h2>
                </div>
            </div>
        </div>

        <button class="btn prev">&#10094;</button>
        <button class="btn next">&#10095;</button>

    </div>

</section>

<section class="cards">
    <div class="card">
        <h2>Cadastrar Formações</h2>
        <p>Descre quais curso você ja fez.</p>
        <button>Cadastrar</button>
    </div>

    <div class="card">
        <h2>Configurações</h2>
        <p>Configure a sua conta.</p>
        <button>Cadastrar</button>
    </div>

    <div class="card">
        <h2>Projetos</h2>
        <p>Organize seus projetos web.</p>
        <button>Cadastrar</button>
    </div>

</section>

<footer>
<p>&copy;<span id="ano"></span> Franciney Araujo. All rights reserved.</p>
</footer>

<script src="assets/js/mobili-menu.js"></script>

</body>
</html>