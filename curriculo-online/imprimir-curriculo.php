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
            /* outline: 1px solid  red; */
        }
        li {
            margin-left: 10pt;
            margin-bottom: 5pt;
        }
        h2 {
            display: flex;
            gap: 10pt;

            margin-bottom: 5pt;
        }
        h2::after {
            content: '';
            flex: 1 1 auto;
            background: #ccc;
        }
        .material-symbols-outlined {
            font-size: 10pt;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 21cm;
            margin: 0 auto;
        }
        /* RESUME */
        .resume {
            margin: 1cm;

            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        /* HERO */
        .hero {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }
        .hero__name {
            font-size: 16pt;
        }

        /* PROFILE */
        .profile {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }   
        .profile__title {
            font-size: 12pt;
        }

        .profile__description {
            font-size: 10pt;
            text-align: justify;
        }

        /* EXPERIENCE */
        .experience {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }
        .experience__title {
            font-size: 12pt;
        }
        .experience__list {
            margin-top: 5pt;
        }
        .experience__role {
            font-size: 10pt;
        }
        .experience__company {
            font-size: 10pt;
        }
        .experience__activity{
            font-size: 10pt;
        }

        /* ACADEMIC */
        .academic {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }
        .academic__title {
            font-size: 12pt;
        }
        .academic__item {
            margin-bottom: 10pt;
        }
        .academic__course {
            font-size: 10pt;
        }
        .academic__instituition {
            font-size: 10pt;
        }

        .contact {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
            padding: 10pt 0;
        }
        .contact__photo {
            width: 50%;
        }
        .contact__title {
            font-size: 12pt;
        }
        .contact__social {

        }
        .contact__item {
            font-size: 10pt;
            
            
            display: flex;
            align-items: center;
            gap: 5pt;
            
            list-style: none;
            margin: 0;
        }
        .contact__link {
            text-decoration: none;
            color: #000;

        }

        /* SKILLS */
        .skills {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }
        .skills__title {
            font-size: 12pt;
        }
        .skills__list {
            font-size: 10pt;
        }

        /* COURSE */
        .course {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
        }

        .course__title {
            font-size: 12pt;
        }
        .course__information {
            font-size: 10pt;
        }
        .course__description {
            font-size: 10pt;
        }
        .course__list {
            margin-top: 5pt;
        }
        .course__item {
            font-size: 10pt;
        }

        /* TOOLS */
        .tools {
            border-bottom: 1px solid black;
            margin-bottom: 5pt;
        }
        .tools__title {
            font-size: 12pt;
        }
        .tools__list {
            font-size: 10pt;
        }

        
        


        @media print {
            .resume {
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
                transform: scale(1);
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
    <!-- RESUMO -->
    <main class="resume">
        <!-- HERO -->
        <section class="left">
            <header class="hero">
                <h1 class="hero__name">
                    <?= strtoupper($nome) ?>
                </h1>
            </header>

            <!-- PROFILE -->
            <section class="profile">
                <h2 class="profile__title">
                    PERFIL PROFISSIONAL
                </h2>
                <p class="profile__description">
                    <?= $perfil ?>
                </p>    
            </section>
            <!-- EXPERIENCE -->
                <section class="experience">
                    <!-- <h2 class="experience__title">
                        HISTÓRICO PROFISSIONAL
                    </h2> -->
                    <?php require_once 'acoes/consulta-historico-do-usuario.php';
                    $titulo = false;
                
                    while ($dados = mysqli_fetch_assoc($resultado)) {
                    
                    $idprofissao    = $dados['idprofissao'];
                    $nome_profissao = $dados['nome_profissao'];
                    $instituicao    = $dados['instituicao'];
                    $cidade         = $dados['cidade'];
                    $estado         = $dados['estado'];
                    $ano_entrada    = $dados['ano_entrada'];
                    $ano_saida      = $dados['ano_saida'];
                    $descricao_01   = $dados['descricao_01'];
                    $descricao_02   = $dados['descricao_02'];
                    $descricao_03   = $dados['descricao_03'];

                    if (!empty($idprofissao)) {
                        if (!$titulo) {
                            echo "<h2 class='experience__title'>HISTÓRICO PROFISSIONAL</h2>
                                    <article  class='experience__item'>";
                            $titulo = true;
                        }
                        echo "
                            <h3 class='experience__role'>
                                $nome_profissao, $ano_entrada - $ano_saida
                            </h3>
                            <h4 class='experience__company'>
                                $instituicao, $cidade - " . strtoupper($estado) . "
                            </h4>";
                    };

                    echo "<ul class='experience__list'>";

                    if (!empty($descricao_01)) {
                        echo "<li class='experience__activity'>$descricao_01</li>";
                    }
                    if (!empty($descricao_02)) {
                        echo "<li class='experience__activity'>$descricao_02</li>";
                    }
                    if (!empty($descricao_03)) {
                        echo "<li class='experience__activity'>$descricao_03</li>";
                    }
                    echo "</ul>";

                    };
                
                ?>
                    </ul>
                </article>
            </section>

            <!-- FORMAÇÃO ACADÊMICA -->
             <!-- <section class="academic"> -->

            <?php require_once 'acoes/consulta-formacoes-do-usuario.php';
                $titulo = false;

                    if ($resultado->num_rows > 0) {
                        while ($dados = mysqli_fetch_assoc($resultado)) {
                            $idformacao = $dados['idformacao'];
                            $nivel = $dados['nivel'];
                            $nome_curso = $dados['nome_curso'];
                            $instituicao = $dados['instituicao'];
                            $situacao = $dados['situacao'];
                            $ano_inicio = $dados['ano_inicio'];
                            $ano_termino = $dados['ano_termino'];

                            if (!$titulo) {
                                echo "<section class='academic'>";
                                echo "<h2 class='academic__title'>
                                        FORMAÇÃO ACADÊMICA
                                    </h2>";
                                $titulo = true;
                            }
                            echo "<article class='academic__item'>
                                    <h3 class='academic__course'>
                                        $nome_curso - $ano_termino
                                    </h3>
                                    <h4 class='academic__instituition'>
                                        $instituicao
                                    </h4>
                                </article>";
                        }
                        echo "</section>";
                    }
            ?>

             <!-- COURSES -->

            <?php require_once 'acoes/consulta-cursos-do-usuario.php';
                $titulo = false;
                if ($resultado->num_rows > 0) {
                    while ($dados = mysqli_fetch_assoc($resultado)) {

                        $idcurso = $dados['idcurso'];
                        $nome_curso = $dados['nome_curso'];
                        $instituicao = $dados['instituicao'];
                        $ano_curso = $dados['ano_curso'];
                        $descricao_01 = $dados['descricao_01'];
                        $descricao_02 = $dados['descricao_02'];
                        $descricao_03 = $dados['descricao_03'];

                        if (!$titulo) {
                            echo "<section class='course'>
                                <h2 class='course__title'>
                                    CURSOS PROFISSIONALIZANTES
                                </h2>";
                                $titulo = true;
                            }
                                echo"<article class='course__item'>";
                                echo "<h3 class='course__information'>
                                        $nome_curso - $instituicao - $ano_curso
                                    </h3>";
                                echo "<ul class='course__list'>";
                                if (!empty($descricao_01)) {
                                    echo "<li class='course__information'>$descricao_01</li>";
                                }
                                if (!empty($descricao_02)) {
                                    echo "<li class='course__information'>$descricao_02</li>";
                                }
                                if (!empty($descricao_03)) {
                                    echo "<li class='course__information'>$descricao_03</li>";
                                }
                                echo "</ul>";
                                echo "</article>";
                            
                    }
                }
            
            ?>

        </section>
        </section>
            <!-- CONTACT -->
             <section class="right">
                <section class="contact">
                    <img
                        class="contact__photo"
                        src="fotos/<?= $foto ?>"
                        alt="foto de pefil">
                    <h2 class="contact__title">
                        CONTATO
                    </h2>
                    <address class="contact__address">
                        <p class="contact__item">
                            <span class="material-symbols-outlined">location_on</span>
                            Pinheiro, Maranhão
                        </p>
                        <p class="contact__item">
                            <span class="material-symbols-outlined">phone</span>
                            <a class="contact__link" href="tel:+5511146924888">
                                (98) 98850-8348 (whatzap)
                            </a>
                        </p>
                        <p class="contact__item">
                            <span class="material-symbols-outlined">email</span>
                            <a class="contact__link" href="#">queraga@gmail.com</a>
                        </p>
                    </address>
                    <article class="contact__social enabled">
                        <ul class="contact__list">
                            <li class="contact__item">
                                <a class="contact__link" href="#">linkedin.com/ibc</a>
                            </li>
                            <li class="contact__item">
                                <a class="contact__link" href="#">linkedin.com/ibc</a>
                            </li>
                        </ul>
                    </article>
                </section>
                
                <!-- SKILLS -->
                <section class="skills">
                    <h2 class="skills__title">
                        HABILIDADES
                    </h2>
                    <ul class="skills__list">
                        <li class="skills__item">
                            Experiência em rotinas de escritório.
                        </li>
                        <li class="skills__item">
                            Atendimento ao público e suporte ao cliente.
                        </li>
                        <li class="skills__item">
                            Operação de caixa e atendimento comercial.
                        </li>
                        <li class="skills__item">
                            Facilidade de aprendizado e adaptação a novos sistemas.
                        </li>
                        <li class="skills__item">
                            Boa comunicação, responsabilidade e comprometimento profissional.
                        </li>
                    </ul>
                </section>
                <!-- TOOLS -->
                <section class="tools">
                    <h2 class="tools__title">
                        FERRAMENTAS
                    </h2>
                    <ul class="tools__list">
                        <li class="tools__item">
                            Tecnologias criação de documentos: Word, excel.
                        </li>
                        <li class="tools__item">
                            Metodologias: Scrum e Kanban
                        </li>
                        <li class="tools__item">
                            Comunicação: email, whatzap, facebook e instagran.
                        </li>
                    </ul>

            </section>
        </section>

    </main>
            <script>
                // TOGGLE PHOTO
                const btn_toggle = document.getElementById('btn_toggle');
                const photo = document.querySelector(".contact__photo");
                const pai = photo.parentElement;
                const btn_print = document.getElementById('btn-print');

                btn_toggle.addEventListener('click', () => {
                    pai.classList.toggle('ativo')
                })

                // PRINT
                btn_print.addEventListener('click',()=> {
                    window.print();
                })

                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelectorAll('.enabled').forEach(function(elemento) {
                        elemento.style.display = 'none';
                    });
                });

            </script>    

</body>
</html>