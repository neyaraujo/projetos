<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/consulta-usuario.php';
    require_once 'acoes/funcoes.php';
    require_once 'acoes/modal.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- <link rel="stylesheet" href="assets/css/footer.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/painel.css"> -->
     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* outline: 1px solid red; */
        }

        body {
            max-width: 100%;
            min-height: 100vh;
            /* background: darkgoldenrod; */
        }

        .main {
            min-height: calc(100vh - 70px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        .main__title {
            margin: 0 auto;
            max-width: 800px;
            text-align: center;
            font-size: clamp(2rem, 4vw, 4rem);
            font-style: italic;
        }
        .main__title--strong {
            color: #004458;
        }
    
        .main__hero {
            width: 100%;

        }

        .main__link {
            background: #004458;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .main__cards {
            width: 100%;
            background: #fff;
            padding: 20px 0;
        }
        .main__list {
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 10px;
        }
        .main__item {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1 1 300px;
            padding: 5px;
            border: 1px solid #a8a8a8;
            border-radius: 10px;
            gap: 5px;
        }

        .main__texto-saudacao {
            font-style: italic;
            margin-top: 20px;
        }
        .footer {
            color: #3f3f3f;
            text-align: center;
        }
        .main__link {
            color: #fff;
        }


     </style>

</head>
<body>



    <?php require_once "header.php"?>

    <main class="main">
        <section class="main__container-saudacao">
            <h4 class="main__texto-saudacao"><?= saudacao(); welcome(); ?></h4>
        </section>
        <section class="main__hero">
                    <h1 class="main__title"><span class="main__title--strong">Crie seu currículo</span>, seja um Profissional preparado.                   
        </section>
        <section class="main__cards">
                <ul class="main__list">
                    <li class="main__item">
                        <h2 class="main__subtitle">Cadastrar Formações</h2>
                        <p class="main__paragrafo">
                            Faça o cadastro completo das suas formações.
                        </p>
                        <a class="main__link" href="cadastrar-formacao.php">Cadastrar</a>
                    </li>
                    <li class="main__item">
                        <h2 class="main__subtitle">Cadastre seus Cursos</h2>
                        <p class="main__paragrafo">
                            Configure a sua conta.
                        </p>
                        <a class="main__link" href="cadastrar-cursos.php">Cadastrar</a>
                    </li>
                    <li class="main__item">
                        <h2 class="main__subtitle">Configurações</h2>
                        <p class="main__paragrafo">
                            Configure a sua conta.
                        </p>
                        <a class="main__link" href="configuracoes.php">Configurar</a>
                    </li>
                </ul>
        </section>
    </main>

<?php modalMensagem()?>

<?php require_once "footer.php"?>
<script src="assets/js/header.js"></script>

</body>
</html>