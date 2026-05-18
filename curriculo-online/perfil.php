<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/perfil.css">
</head>
<body>
    <?php require_once "header.php"?>
    <main>
        <section class="perfil">
            <!-- <div class="header">
                <h1>Franciney de Jesus Araujo</h1>
            </div> -->
            <div class="foto">
                <img src="assets/images/favicon.png" alt="">
                <a>Nenhum arquivo selecionado...</a>
                <button class="btn-primary">Escolher foto</button>
            </div>
        </section>
        <section>

<form class="form" action="#" id="form">
            <div class="form-content">
                <label for="nome"><sup>*</sup>Nome Completo</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="nacionalidade">Nacionalidade</label>
                <input 
                type="text" 
                name="nacionalidade" 
                id="nacionalidade"
                value="Brasileiro(a)"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="estado-civil">Estado Civil</label>
                <select id="estado-civil" name="estado-civil">
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Solteiro">Casado(a)</option>
                    <option value="Solteiro">Viúvo(a)</option>
                    <option value="Solteiro">Divorciado(a)</option>
                </select>
                <a></a>
            </div>
            <div class="form-content">
                <label for="idade">Idade</label>
                <input 
                type="number" 
                name="idade" 
                id="idade"
                step="1"
                min="1"
                placeholder="Digite sua idade"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="endereco">Endereço completo</label>
                <input 
                type="text" 
                name="endereco" 
                id="endereco"
                placeholder="Rua, Travessa, Quadra..."/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="celular">Celular</label>
                <input 
                type="tel" 
                name="celular" 
                id="celular"
                placeholder="(98) xxxx-xxx"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="email"><sup>*</sup>E-mail</label>
                <input 
                type="email" 
                name="email" 
                id="email"
                autocomplete="email"
                placeholder="exemplo@gmail.com"/>
                <a></a>
            </div>
            <button class="btn-primary" type="submit">Cadastrar</button>
        </form>
        </section>
    </main>
<?php require_once "footer.php"?>    
<script src="assets/js/header.js"></script>

</body>
</html>