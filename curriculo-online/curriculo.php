<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/consulta-usuario.php';
    require_once 'acoes/consulta-cargo.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
            <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* outline: 1px solid red; */
        }
        ul {
            list-style: none;
        }
        a {
            text-decoration: none;
            color: initial;
        }
        body {
            width: 100%;
            min-height: 100vh;
            background: #004869;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {            
            width: 100%;
            padding: 10px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .header__menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .header__menu:hover {
            text-decoration: underline;
        }

        .header__container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;     
            align-items: center;
        }

        .header__logo {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .header__enfase {
            font-weight: 200;

        }

        .main {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 30px;
            padding: 10px;
        }
        .main__user {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main__imgs{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
        }
        .main__img.user {
            width: 100%;
            
        }
        
        .main__aside {
                background: #fff;
                padding: 10px;
        }
        .main__information {
            color: #fff;
            font-size: clamp(1rem, 1.5vw, 1.5rem);
            text-align: center;

        }
        .main__user-title {
            text-align: center;
            color: white;
            font-size: clamp(1.5rem, 2vw, 2rem );
        }

        .main__container-foto {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
        }
        .main__foto-perfil {
            width: 100%;
            object-fit: cover;
        }
        .main__title {
            color: #fff;
        }

        .main__title.contatos {
            color: #004869;
            text-align: center;
        }
        .main__content {
            background: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        .main__cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;

        }
        .main__card {
            margin-top: auto;
            flex: 1 1 250px;

            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .main__card-img {
            border-radius: 10px;
            width: 100%;
        }
        .main__link {
            color: #494949;
            margin-bottom: 10px; 

        }

        .profile {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }


        .footer {
            color: #fff;
            text-align: center;
        }


    </style>
</head>
<body>
    <header class="header">
        <div class="header__container">
            <a class="header__logo" href="painel.php">Curriculo<i class="header__enfase">Online</i></a>
            <nav class="header__nav">
                <ul class="header__menu">
                        <li class="header__item"><a href="imprimir-curriculo.php">Visualizar impressão</a></li>
                        <li class="header__item"><a href="painel.php" class="header__link material-symbols-outlined main__edit">Close</a></li>
                </ul>
            </nav>
        </div>

    </header>
    <main class="main">
        <div class="main__user">
            <h2 class="main__user-title">Quem sou eu?</h2>
            <div class="main__container-foto">
                <img class="main__foto-perfil" src="fotos/<?= $foto ?>" alt="">
            </div>
            <p class="main__information"><?= $_SESSION['nome'] . ",<br>" 
            . $_SESSION['nacionalidade'] . ", " . $_SESSION['estado_civil'] . ", " . $_SESSION['idade'] . " anos" ?></p>

        </div>
        
        <section class="main__section profile">
            <article class="profile__item">
                <h2 class="main__title">Cargo Pretendido</h2>
                <p class="main__content">
                    <?= $cargo ?>
                </p>
            </article>
            <article class="profile__item">
                <h2 class="main__title">
                    Perfil Profissional
                </h2>
            <p class="main__content profile__dados">
                <?= $perfil ?>
            </p>
            </article>

        </section>
        <section class="main__section">
            <h2 class="main__title">Formação</h2>
            <ul>
                <?php

                    include_once 'acoes/consulta-formacoes-do-usuario.php';
                    
                    while ($dados = mysqli_fetch_assoc($resultado)) {
                        $idformacao     = $dados['idformacao'];
                        $nivel          = $dados['nivel'];
                        $nome_curso     = $dados['nome_curso'];
                        $instituicao    = $dados['instituicao'];
                        $ano_inicio     = $dados['ano_inicio'];
                        $ano_temino     = $dados['ano_termino'];
                        $situacao       = $dados['situacao'] ?: 'concluido';

                        echo "<li class='main__content'>$nome_curso - $instituicao - $ano_inicio</li>";
                        
                        }     
                ?>
            </ul>

        </section>
        <section class="main__section">
            <h2 class="main__title">Cursos</h2>
            <ul>
                <?php include_once 'acoes/consulta-cursos-do-usuario.php'; 
                    
                while ($dados = mysqli_fetch_assoc($resultado)) {
                        $idcurso    = $dados['idcurso'];
                        $nome_curso    = $dados['nome_curso'];
                        $instituicao    = $dados['instituicao'];
                        $ano_curso    = $dados['ano_curso'];

                        echo "<li class='main__content'>$nome_curso - $instituicao - $ano_curso</li>";
                    }
                ?>
            </ul>
        </section>

        <aside class="main__aside">
            <h2 class="main__title contatos">Contatos</h2>
            <ul class="main__cards">
                <li class="main__card">
                    <a class="main__link" href="#"><?= $_SESSION['endereco'] ?></a>
                    <img class="main__card-img" src="assets/images/localizacao.jpg" alt="localização">
                </li>
                <li class="main__card">
                    <a class="main__link" href="#"><?= $_SESSION['email'] ?></a>
                    <img class="main__card-img" src="assets/images/localizacao.jpg" alt="localização">
                </li>
                <li class="main__card">
                    <a class="main__link" href="#"><?= $_SESSION['celular'] ?></a>
                    <img class="main__card-img" src="assets/images/localizacao.jpg" alt="localização">
                </li>

            </ul>
        </aside>

    </main>
    <?php require_once 'footer.php'?>
</body>
</html>