<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    include_once 'acoes/consulta-usuario.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            font-size: 24pt;
        }

        .header {
            display: flex;
            
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
            <li class="nav__item"><button>Imprimir</button></li>
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
                <h1 class="header__title"><?= $nome ?></h1>
                <ul class="header__list">
                    <li class="header__item"><?= $idade ?> anos</li>
                    <li class="header__item"><?= $nacionalidade ?></li>
                </ul>
                <address class="header__endereco">
                    Endereço: <?= $endereco ?> <br>
                    Telefone:<?= $celular ?><br>
                    Email: <?= $email ?>
                </address>
            </div>
        </header>
        <main class="main">
            <h2 class="main__title">Objetivo</h2>
            <hr class="main__row">
            <p class="main__dados">Analista Finaceiro</p>
            <h2 class="main__title">Resumo</h2>
            <hr class="main__row">
            <p class="main__dados">Profissional com mais de 10 anos de experiência em gestão adminsitrativa e financeira, atuando na otimização de processos, controle orçamentário e gestão de euqipes. Reconhecido por alcançar resultados significativos, como a redução de custos em 20% e o aumento da eficiência operacional em empresas de médio e grande porte.</p>
            <h2 class="main__title">Formação Acadêmica</h2>
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
            <h2 class="main__title">Cursos Profissionalizantes</h2>
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

</body>
</html>