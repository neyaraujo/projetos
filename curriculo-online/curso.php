<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/consulta-usuario.php';
    require_once 'acoes/modal.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
    @charset "UTF-8";

        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    :root {
        --cor01: #0C3C60;
        --cor02: #253541;
        --cor03: #4D33DE;
        --cor04: #000000;
        --cor05: #ffffff;
        --cor06: #6ed1ff;
        --font-padrao: "Roboto", sans-serif;

        --primary-blue: #0066ff;
        --hover-blue: #0052cc;
        --primary-yellow: #ffc107;
        --hover-yellow: #eab000;
        --text-dark: #333;
        --text-muted: #666;
        --bg-light: #f4f7f9;
        --border-color: #e0e0e0;
        --white: #ffffff;
    }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* apenas para debugar */
            /* outline: 1px solid red; */
        }
        ul {
            list-style: none;
        }
        a {
            text-decoration: none;
            color: initial;
        }
        .material-symbols-outlined {
            font-size: 14px;
        }
        
        body {
            max-width: 100%;
            min-height: 100vh;
            background-color: #ccc;
            color: #333;
            background: #0C3C60;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            width: 100%;
            background: #f4f7f9;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        .header__container {
            max-width: 900px;
            padding: 20px;    
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 auto;

        }

        .header__menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header__title {
            font-size: clamp(1.2rem, 2vw, 2rem);
        }
        .header__title--italic {
            font-style: italic;
            font-weight: 200;
        }

        .header__button {
            background: #0C3C60;
            padding: 5px 10px;
            border-radius: 3px;
            color: #fff;
            font-size: 0.8rem;
        }

        .main {
            max-width: 900px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: stretch;
            margin: 0 auto;

        }

        .main__courses {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .main__title {
            align-self: center;
            color: #fff;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .main__item {
            background: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 12px;

            display: flex;
            align-items: center;
            gap: 10px;
        }
        .main__top {
            margin-top: 50px;
            align-self: center;
            padding: 10px 20px;
            border-radius: 5px;

            background: #fff;
        }



    </style>
</head>
<body>
    <?php modalMensagem();?>

    <header class="header">
            <div class="header__container">
                <div class="header__name">
                    <h1 class="header__title">
                        <strong>Currículo</strong><span class="header__title--italic">Online</span>
                    </h1>
                </div>
                
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li class="header__item"><a class="header__link header__button" href="cadastrar-cursos.php">Novo Curso</a></li>
                        <li class="header__item"><a class="header__link material-symbols-outlined main__edit" href="painel.php">Close</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <main class="main">
            <section class="main__courses">
                <h1 class="main__title">Cursos</h1>
                <ul class="main__list">
                        <?php 
                            include_once 'acoes/consulta-cursos-do-usuario.php';
                            while ($dados = mysqli_fetch_assoc($resultado)) {
                                $idcurso = $dados['idcurso'];
                                $nome_curso = $dados['nome_curso'];
                                $instituicao = $dados['instituicao'];
                                $ano_curso = $dados['ano_curso'];
                                $descricao = $dados['descricao'];
                                    
                                    echo "<li class='main__item'>
                                    <a class='material-symbols-outlined main__edit' href='editar-curso.php?id={$idcurso}'>Edit</a>
                                    <a class='material-symbols-outlined main__delete' href='acoes/modal-apagar-curso.php?id={$idcurso}'>Delete</a>$nome_curso - $instituicao - $ano_curso
                                    </li>
                                    <p class='main__item main__item-descricao'>$descricao</p>
                            
                                    ";
                                                                  
                            }
                        ?>
                </ul>
                <style>
                    .main__item-descricao {
                        font-size: 10px;
                        text-indent: 50px;
                        padding: 5px;
                        
                    }
                </style>
            </section>
    </main>
</body>
</html>