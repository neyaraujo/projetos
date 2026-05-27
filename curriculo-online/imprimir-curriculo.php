<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    include_once 'acoes/consulta-usuario.php';
    include_once 'acoes/consulta-cargo.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include_once 'acoes/link-icons.php'?>

    <title>Document</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 12pt;
        }


        body {
            /* outline: 1px solid red; */
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        .nav {
            padding: 10px;
            width: 100%;
            position: fixed;
            top: 0;
        }
        
        .nav__list {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
        }

        .nav__item {
            list-style: none;
        }

        .curriculo {
            margin: 0 auto;
            transform: scale(0.8);            
            max-width: 21cm;
        }

        .header__title {
            font-size: clamp(1.5rem, 4vw, 3rem);
        }

        .header {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;

            margin-bottom: 30px;
        }

        .header__item {
            list-style: none;
        }

        .header__img--circle {
            flex: 0 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
        }
        .header__img {
            width: 100%;
            height: 100%;  
            object-fit: cover;
        }
        .main__title {
            font-size: 16pt;
            margin: 10px 0;
        }
        .main__row {
            margin: 10px 0 ;
        }
        .main__dados {
            text-align: justify;
        }
        .main__item {
            margin-left: 20px;
            line-height: 1.5rem;
        }
        .nav {
            margin-top: 10px;
        }


        @media print {
            .curriculo {
                transform: scale(1);
            }
            nav {
               display: none;
            }
        }

        .ativo {
            display: none;
        }

        @media (max-width: 800px) {
            body {
                transform: scale(0.8);
            }
        }

    </style>
</head>
<body>

    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item"><button id="btn_toggle">Remover/Foto</button></li>
            <li class="nav__item"><button id="btn-print">Imprimir</button></li>
            <li class="nav__item close"><a href="curriculo.php">X</a></li>
            
        </ul>
    </nav>            
    <div class="curriculo">
        <header class="header">
            <div class="header__img--circle">
                <img class="header__img" src="fotos/<?= $foto ?>" alt="">
            </div>
        <script>
            const btn_toggle = document.getElementById('btn_toggle');
            const foto = document.querySelector(".header__img");
            const pai = foto.parentElement;
            btn_toggle.addEventListener('click', () => {
                pai.classList.toggle('ativo')
            })
        
        </script>
            <div class="header__dados">
                <h1 class="header__title">
                    <?= $nome ?>
                </h1>
                <ul class="header__list">
                    <!-- <li class="header__item"><?= $idade ?> anos</li> -->
                    <!-- <li class="header__item"><?= $nacionalidade ?></li> -->
                </ul>

                <style>
                    .address {
                        margin-top: 20px;
                    }
                    .address__dados {
                        display: flex;
                        align-items: center;
                        gap: 10px;
                        
                    }
                </style>
                <address class="address">
                    <p class="address__dados"><span class="material-symbols-outlined">location_on</span><?= $endereco ?></p>
                    <p class="address__dados"><span class="material-symbols-outlined">phone</span>Celular:<?= $celular ?></p>
                    <p class="address__dados"><span class="material-symbols-outlined">email</span><?= $email ?></p>
                </address>
            </div>
        </header>
        <main class="main">
            <h2 class="main__title">
                CARGO PRETENDIDO
            </h2>
            <hr class="main__row">
            <p class="main__dados">
                <?= $cargo ?>
            </p>
            <h2 class="main__title">
                PERFIL PROFISSIONAL
            </h2>
            <hr class="main__row">
            <p class="main__dados">
                <?= $perfil ?>

            </p>
            <h2 class="main__title">FORMAÇÃO ACADÊMICA</h2>
            <hr class="main__row">
            <ul class="main__list">
                <?php require_once 'acoes/consulta-formacoes-do-usuario.php';?>
                <?php
                    while($dados = mysqli_fetch_array($resultado)) {
                        $idformacao         = $dados['idformacao'];
                        $nivel              = $dados['nivel'];
                        $nome_curso         = $dados['nome_curso'];
                        $instituicao        = $dados['instituicao'];
                        $ano_inicio         = $dados['ano_inicio'];
                        $ano_termino        = $dados['ano_termino'];
                        $situacao           = $dados['situacao'];
        
                        echo "<li class='main__item'>$nome_curso - $instituicao - $ano_termino</li>";
                    }
                ?>
            </ul>
            <h2 class="main__title">CURSOS PROFISSIONALIZANTES</h2>
            <hr class="main__row">
            <ul class="main__list">
        
                <?php require_once 'acoes/consulta-cursos-do-usuario.php'?>
                <?php
        
                    while($dados = mysqli_fetch_assoc($resultado)) {
                    $id_curso       = $dados['idcurso'];
                    $nome_curso     = $dados['nome_curso'];
                    $instituicao    = $dados['instituicao'];
                    $ano_curso      = $dados['ano_curso'];
        
                    echo "<li class='main__item'>$ano_curso - $nome_curso - $instituicao</li>";
                    }

                ?>
            </ul>
        </main>
    </div>
    <script>
        const btn_print = document.getElementById('btn-print');

        btn_print.addEventListener('click',()=> {
            window.print();
        })
    </script>

</body>
</html>