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

            /* correção para impressão das cores */
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        a {
            color: #004f77;
            transition: 0.3 ease-in-out;
            text-decoration: none;
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
            text-align: justify;
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
            width: 100%;
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
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .course__ano-curso {
            justify-self: end;
        }


        .course__ano-curso
        .course__description {
            font-size: 10pt;
        }
        .course__list {
            margin-top: 5pt;
        }
        .course__item {
            font-size: 10pt;
        }

        /* LINGUAGEM */
        .linguagem {
            margin-bottom: 10pt;
            break-inside: void;
        }
        .linguagem__container {
            display: flex;
            flex-wrap: wrap;
            gap: 1px;
        }

        .linguagem__item{
            flex: 1 1 50%;
        }
        
        .linguagem__title {
            font-size: 12pt;
        }
        .linguagem__language {
            font-size: 10pt;
        }

        .linguagem__item {
            flex-wrap: wrap;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .linguagem__bar {
            margin-top: 3px;
            width: 100%;
            background: #ccc;
        }



        /* PROGRESS */
        <?php require_once 'acoes/consulta-nivel.php'; ?>


        /* TOOLS */
        .tools {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }
        .tools__title {
            font-size: 12pt;
        }
        .tools__list {
            font-size: 10pt;
        }


        @media print {
            body {
                width: 210mm;
                height: 297mm;
                transform: scale(1);
                transform-origin: top left;
                overflow: hidden;
            }
            nav {
               display: none;
            }
        }

        .ativo {
            display: none;
        }

        @media (max-width: 800px) {
            
        }
    </style>
</head>
<body>
    <header class="header">
        <a class="header__logo" href="">Curriculo Online</a>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item"><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>



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
                    <?="<a href='perfil.php'>" . strtoupper($nome) . "</a>"?>
                </h1>
            </header>

            <!-- PROFILE -->
            <section class="profile">
                <h2 class="profile__title">
                    <a href="perfil.php">PERFIL PROFISSIONAL</a>
                </h2>
                <p class="profile__description">
                    <?= $perfil ?>
                </p>    
            </section>
            <!-- EXPERIENCE -->
                <section class="experience">
                    <?php require_once 'acoes/consulta-historico-do-usuario.php';
                    $titulo = false;
                
                    while ($dados = mysqli_fetch_assoc($resultado)) {
                    
                    $idprofissao    = $dados['idprofissao'];
                    $profissao = $dados['profissao'];
                    $instituicao    = $dados['instituicao'];
                    $cidade         = $dados['cidade'];
                    $estado         = $dados['estado'];
                    $ano_entrada    = $dados['ano_entrada'];
                    $ano_saida      = $dados['ano_saida'];
                    $descricao      = $dados['descricao'];

                    if (!empty($idprofissao)) {
                        if (!$titulo) {
                            echo "<h2 class='experience__title'><a href='profissao.php'>HISTÓRICO PROFISSIONAL</a></h2>
                                    <article  class='experience__item'>";
                            $titulo = true;
                        }
                        echo "
                            <h3 class='experience__role'>
                                $profissao, $ano_entrada - $ano_saida
                            </h3>
                            <h4 class='experience__company'>
                                $instituicao, $cidade - " . strtoupper($estado) . "
                            </h4>";
                    };

                        echo "<ul class='experience__list'>";

                        if (!empty($descricao)) {
                            echo "<li class='experience__activity'>$descricao</li>";
                            echo "</ul>";
                        }
                   

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
                                        <a href='formacao.php'>FORMAÇÃO ACADÊMICA</a>
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
                    }
                echo "</section>";
            ?>

             <!-- COURSES -->

            <?php require_once 'acoes/consulta-cursos-do-usuario.php';
                $titulo = false;
                if ($resultado->num_rows > 0) {
                    echo "
                        <section class='course'>
                            <h2 class='course__title'>
                                <a href='curso.php'>CURSOS PROFISSIONALIZANTES</a>
                            </h2>";

                         while ($dados = mysqli_fetch_assoc($resultado)) {
                            $idcurso = $dados['idcurso'];
                            $nome_curso = $dados['nome_curso'];
                            $instituicao = $dados['instituicao'];
                            $ano_curso = $dados['ano_curso'];
                            $descricao = $dados['descricao'];

                            
                            echo "
                                <article class='course__item'>
                                    <h3  class='course__information'>
                                        <span>$nome_curso</span><span>$instituicao</span><span class='course__ano-curso'>$ano_curso</span>
                                    </h3>";

                            if ($descricao !== '') {
                                echo "<p>
                                    <ul course__list>
                                        <li course__descrition>$descricao</li>
                                    </ul>";
                            }
                                    



                            echo "
                            </article>";
                        }

                            echo "
                        </section>";

                } // fim if num_rows  
            ?>  

            <!-- INICIO SECTIIO LINGUAGEM -->
            <?php 
                require_once 'acoes/consulta-linguagem.php';
            ?>
            <!-- FIM SECTION LINGUAGEM -->
                
            </section>

            <!-- CONTACT -->
             <section class="right">
                <section class="contact">
                    <img
                        class="contact__photo"
                        src="fotos/<?= $foto ?>"
                        alt="foto de pefil">
                        <style>
                            .hidden {
                                display: none;
                            }
                        </style>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                const photo = document.querySelector('.contact__photo');
                                if (photo.getAttribute("src") === "fotos/user.png") {
                                    photo.classList.add('hidden');
                                } else {
                                    photo.classList.remove('hidden');
                                }
                            })
                        </script>


                    <h2 class="contact__title">
                        <a href='perfil.php'>CONTATO</a>
                    </h2>
                    <address class="contact__address">
                        <p class="contact__item">
                            <span class="material-symbols-outlined">location_on</span>
                            <?= $endereco ?>
                        </p>
                        <p class="contact__item">
                            <span class="material-symbols-outlined">phone</span>
                            <a class="contact__link" href="tel:+5511146924888">
                                <?= $celular ?>
                            </a>
                        </p>
                        <p class="contact__item">
                            <span class="material-symbols-outlined">email</span>
                            <a class="contact__link" href="#">
                                <?= $email ?>
                            </a>
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


                <?php require_once 'acoes/consulta-habilidades-do-usuario.php';
                // se existe habilidade então inicia a criação
                    if ($resultado->num_rows >0) {
                        echo 
                        "<section class='skills'>
                            <h2 class='skills__title'>
                                <a href='cadastrar-habilidade.php'>HABILIDADES</a>
                            </h2>
                        
                        <ul class='skills__list'>";

                        while ($dados = mysqli_fetch_assoc($resultado)) {
                                echo "<li class='skills__item'>" . $dados['habilidade'] . "</li>";        
                        }    
                        echo "
                        </ul>
                        </section>";
                    }
                ?>
                <!-- TOOLS -->
                <section class="tools">
                    <h2 class="tools__title">
                        <a href='#'>FERRAMENTAS</a>
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

                <!-- INFORMAÇÕES ADICIONAIS -->
                <?php 
                    require_once 'acoes/consulta-informacoes-adicionais-do-usuario.php';
                    
                    if ($resultado->num_rows > 0) {
                        echo "
                             <section class='additional'>
                                <h2 class='additional__title'>
                                    <a href='cadastrar-informacao-adicional.php'>INFORMAÇÕES ADICIONAIS</a>
                                </h2>
                             </section>
                             <ul class='additional__list'>";
                                while ($dados = mysqli_fetch_assoc($resultado)) {
                                    $informacao = $dados['informacao'];
                                    echo "
                                        <li class='additional__item'>$informacao</li>
                                    ";
                                }

                             echo "
                                </ul>
                        ";
                    }
    
                ?>
                <style>
                    .additional {
                        border-bottom: 1px solid black;
                    }
                    .additional__title {
                        font-size: 12pt;
                    }
                    .additional__list {
                        margin-top: 10pt;
                    }
                    .additional__item {
                        font-size: 10pt;
                    }
                </style>

                <?php require_once 'gerar-qrcode.php'?>
            </section>

       
    </main>
            <script>
                // CONTROLE DE IMPRESSÃO
                function ajustarEscala() {
                    const A4_LARGURA = 210;
                    const A4_ALTURA = 297;

                    const larguraPagina = A4_LARGURA * 96 / 25.4;
                    const alturaPagina = A4_ALTURA * 96 / 25.4;

                    const conteudo = document.body;

                    const escalaLargura = larguraPagina / conteudo.scrollWidth;
                    const escalaAltura = alturaPagina / conteudo.scrollHeight;

                    let escala = Math.min(escalaLargura, escalaAltura);
                    if (escala > 1) escala = 1;

                    conteudo.style.transform = `scale(${escala})`;
                    conteudo.style.transformOrigin = "top left";
                    
                }

                // TOGGLE PHOTO
                const btn_toggle = document.getElementById('btn_toggle');
                const photo = document.querySelector(".contact__photo");
                const pai = photo.parentElement;
                const btn_print = document.getElementById('btn-print');


                btn_toggle.addEventListener('click', () => {
                    photo.classList.toggle('ativo')
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