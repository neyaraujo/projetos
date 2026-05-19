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
        img {
            max-width: 100%;
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
        }
        .main__img.user {
            width: 100%;
        }
        .main__information {
            color: #fff;
            font-size: 1.5rem;

        }
        .main__title {
            text-align: center;
            color: white;
        }
        .main__title--size {
            font-size: clamp(1.5rem, 2vw, 2rem );
        }
        .main__title.contatos {
            color: #004869;
        }
        .main__content {
            background: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        .main__aside {
            background: #fff;
        }
        .main__cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;

        }
        .main__card {
            padding: 10px;
            flex: 1 1 250px;
            text-align: center;
            
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .main__img {
            border-radius: 10px;
        }
        .main__link {
            color: #494949;
            margin-bottom: 5px;
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
                    <li class="header__item">
                        <a href="painel.php" class="header__link material-symbols-outlined main__edit">Close</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <main class="main">
        <div class="main__user">
            <h2 class="main__title main__title--size">Quem sou eu?</h2>
            <div class="main__imgs">
                <img class="main__img user" src="assets/images/favicon.png" alt="">
            </div>
            <p class="main__information">Franciney de Jesus Araujo,</p>
            <p class="main__information">Brasileiro, Solteiro, 38 anos</p>
        </div>
        <section class="main__section">
            <h2 class="main__title">Formação</h2>
            <p class="main__content">Nome da formação 1</p>
            <p class="main__content">Nome da formação 2</p>
        </section>
        <section class="main__section">
            <h2 class="main__title">Cursos</h2>
            <p class="main__content">Nome da Curso 1</p>
            <p class="main__content">Nome da Curso 2</p>
        </section>

        <aside class="main__aside">
            <h2 class="main__title contatos">Contatos</h2>
            <ul class="main__cards">
                <li class="main__card">
                    <a class="main__link" href="#">Endereço</a>
                    <img class="main__img" src="assets/images/localizacao.jpg" alt="localização">
                </li>
                <li class="main__card">
                    <a class="main__link" href="#">ney@gmail.com</a>
                    <img class="main__img" src="assets/images/localizacao.jpg" alt="localização">
                </li>
                <li class="main__card">
                    <a class="main__link" href="#">(98) 98548-3758</a>
                    <img class="main__img" src="assets/images/localizacao.jpg" alt="localização">
                </li>

            </ul>
        </aside>

    </main>
    <footer class="footer">
        <p>Texto do footer</p>
    </footer>
</body>
</html>