<?php 
    session_start();
    require_once 'acoes/consulta-usuario.php';
    require_once 'acoes/consulta-cargo.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>curriculo-01</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* outline: 1px solid red; */

            /* correção para impressão das cores */
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        li {
            margin-left: 10pt;
            margin-bottom: 5pt;
        }
        h2 {
            display: flex;
            gap: 10px;

            margin-bottom: 5px;
        }
        .material-icons {
            font-size: 10pt;
        }
        h2::after {
            content: '';
            flex: 1;

            display: inline-block;
            
            background: #ccc;

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
        .hero {
            border-bottom: 1px solid black;
            margin-bottom: 20pt;
        }

        /* HERO */
        .hero__name {
            font-size: 16pt;
        }
        .profile__title {
            font-size: 12pt;
        }
        .profile {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
        }
        .profile__description {
            font-size: 10pt;
            text-align: justify;
        }

        /* EXPERIENCE */
        .experience {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
        }
        .experience__title {
            font-size: 12pt;
        }
        .experience__list {
            margin-top: 5px;
        }

        .experience__role {
            font-size: 10pt;
        }
        .experience__company {
            font-size: 10pt;
        }
        .experience__activity {
            font-size: 10pt;
        }

        /* ACADEMIC */
        .academic {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
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

        /* IDIOMA */
        .idioma {
            /* border-bottom: 1px solid black; */
            margin-bottom: 10pt;

        }
        .idioma__container {
            display: flex;
            gap: 20px;
        }

        .idioma__item{
            flex: 1 1 50%;
        }
        
        .idioma__title {
            font-size: 12pt;
        }
        .idioma__language {
            font-size: 10pt;
        }

        .idioma__item {
            flex-wrap: wrap;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .idioma__bar {
            margin-top: 3px;
            width: 100%;
            background: #ccc;
        }
        .idioma__progress {
            width: 80%;
            height: 5pt;
            background-color: #7a9f00;
        }
        .idioma__nivel {
            font-size: 10pt;
        }

        /* CONTACT */
        .contact {
            border-bottom: 1px solid   black;
            margin-bottom: 10pt;
        }
        .contact__photo {
            width: 100%;
        }
        .contact__title {
            font-size: 12pt;
        }
        .contact__item {
            font-size: 10pt;

            display: flex;
            align-items: center;
            gap: 5px;

            list-style: none;
            margin: 0;
        }
        .contact__link {
            text-decoration: none;
        }

        /* SKILLS */
        .skills {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
        }
        .skills__title {
            font-size: 12pt;
        }
        .skills__list {
            font-size: 10pt;
        }

        /* TOOLS */
        .tools {
            border-bottom: 1px solid black;
            margin-bottom: 10pt;
        }
        .tools__title {
            font-size: 12px;
        }
        .tools__list {
            font-size: 10pt;
        }
        @page {

        }

        @media print {

        }

        .header__container {
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
        .header__menu {
            display: flex;
            align-items: center;
        }
        .header__item {
            list-style: none;
        }
        .header__link {
            text-decoration: none;
        }

        

    </style>
</head>
<body>
    <header class="header">
        <div class="header__container">
            <a class="header__logo" href="">
                DevSystem
            </a>
            <nav class="header__nav">
                <ul class="header__menu">
                    <li class="header__item">
                        <a class="header__link header__link--active" href="#">
                            Home
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__link header__link--active" href="#">
                            Serviços
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__link header__link--active" href="#">
                            Projetos
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__link header__link--active" href="#">
                            Contatos
                        </a>
                    </li>
                </ul>
                
            </nav>

        </div>

    </header>
    
    <div class="resume">
        <div class="left">
            <header class="hero">
                <h1 class="hero__name">
                    <?= strtoupper($nome) ?>
                </h1>
            </header>
            
            <section class="profile">
                <h2 class="profile__title">
                    PERFIL PROFISSIONAL
                </h2>
                <p class="profile__description">
                    <?= $perfil ?>
                </p>
            </section>
            <section class="experience">
                <h2 class="experience__title">
                    HISTÓRICO PROFISSIONAL
                </h2>
                <article class="experience__item">
                    <h3 class="experience__role">
                        Desenvolvedora de Sofware Sênior, 02/2022 - Atual
                    </h3>
                    <h4 class="experience__company">
                        Banco Bradesco S.A - Brueri, SP
                    </h4>
                        <ul class="experience__list">
                            <li class="experience__activity">
                                Manutenção de sites e aplicativos, monitando o desempenho dos recursos e ferramentas para intervir em casos de necessidade.</li>
                            <li class="experience__activity">
                                Teste de novos softwares, assegurando a qualidade de funcionamento dos programas e a correspondência das funcionalidades com a execução dos comandos.
                            </li>
                            <li class="experience__activity">
                                Criação de novos softwares, seguindo regras e procedimentos de desenvolvimento dos códigos para atender às especidficações dos projetos.
                            </li>
                        </ul>
                </article>
            
                <article class="experience__item">
                    <h3 class="experience__role">
                        Desenvolvedora de Software, 01/2020 - 01/2022
                    </h3>
                    <h4 class="experience__company">
                        Banco Itaú - Barueri, SP
                    </h4>
            
                        <ul class="experience__list">
                            <li class="experience__activity">
                                Participação em reuniões com os clientes, definindo os requisitos dos projetos a partir das demandas solicitadas.</li>
                            <li class="experience__activity">
                                Avaliação da necessidade de mudanças nos sistemas, visando atender às demandas tecnológicas dos usuários.
                            </li>
                            <li class="experience__activity">
                                Definição do layout dos aplicativos e sites desenvolvidos, criando uma experiência agradável intuitiva para os usuários.
                            </li>
                        </ul>
                </article>
                    <article class="experience__item">
                        <h3 class="experience__role">
                            Desenvolvedora de Softeare, 07/2017 - 12/2019
                        </h3>
                        <h4 class="experience__company">
                            Nova Technology for Business - Barueri, SP
                        </h4>
                        <ul class="experience__list">
                            <li class="experience__activity">
                                Elaboração da documentação de sistemas, desenvolvendo diretrizes e instruções de apoio ao usuário sobre a utilização dos programas.
                            </li>
                            <li class="experience__activity">
                                Acompanhamento do desenvolvimento dos softwares, intervindo na correção de falhas no código para garantir a qualidade de projeto.
                            </li>
                            <li class="experience__activity">
                                Integração de sitemas, possibilitando a eficiência na troca de informações entre dois sortwares diferentes.
                            </li>
                        </ul>
                    </article>
            </section>
            <section class="academic">
                <h2 class="academic__title">
                    FORMAÇÃO ACADÊMICA
                </h2>
                <article class="academic__item">
                    <h3 class="academic__course">
                        Especialização em Engenharia de Softwares, 2015 - 2016
                    </h3>
                    <h4 class="academic__instituition">
                        UNICAMP - Universidade Estadual de Campinas
                    </h4>
                </article>
                <article class="academic__item">
                    <h3 class="academic__course">
                        Ciência da Computação 2007 - 2012</h3>
                    <h4 class="academic__instituition">UNICAMP - Universidade Estadual de Campinas</h4>
                </article>
            </section>
            <section class="idioma">
                <h2 class="idioma__title">IDIOMAS</h2>
                <div class="idioma__container">
                    <article class="idioma__item">
                        <h3 class="idioma__language">
                            inglês:
                        </h3>
                        <small class="idioma__small">
                            C1
                        </small>
                        <div class="idioma__bar">
                            <div class="idioma__progress">
                            </div>
                        </div>
                        <p class="idioma__nivel">Avançado</p>
                    </article>
                    <article class="idioma__item">
                        <h3 class="idioma__language">
                            Espanhol:
                        </h3>
                        <small class="idioma__small">
                            C1
                        </small>
                        <div class="idioma__bar">
                            <div class="idioma__progress">
                            </div>
                        </div>
                        <p class="idioma__nivel">Intermediário</p>
                    </article>
                </div>
            </section>
        </div>




        <div class="right">
            <section class="contact">
                <img
                    class="contact__photo"
                    src="fotos/<?= $foto ?>"
                    alt="Foto de [nome completo]"
                >
                <h2 class="contact__title">
                    CONTATO
                </h2>
                <address class="contact_address">
                    <p class="contact__item">
                    <span class="material-icons">location_on</span>
                        <?= $endereco ?>
                    </p>
                    <p class="contact__item">
                        <span class="material-icons">phone</span>
                        <a class="contact__link" href="tel:+5511146924888">
                            <?= $celular ?>
                        </a>
                    </p>
                    <p class="contact__item">
                        <span class="material-icons">email</span>
                        <a class="contact__link" href="mailto:isabela.costa@brmail.com">
                            <?= $email ?>
                        </a>
                    </p>
                </address>
                <article class="contact__social">
                    <ul class="contact__list">
                        <li class="contact__item">
                            <a class="contact__link" href="#">linkedin.com/ibc</a>
                        </li>
                        <li class="contact__item">
                            <a class="contact__link" href="#">behance.net/ibc</a>
                        </li>
                    </ul>
                </article>
            </section>
            <section class="skills">
                <h2 class="skills__title">
                    HABILIDADES</h2>
                <ul class="skills__list">
                    <li class="skills__item">Conhecimento em componentes e frameworks</li>
                    <li class="skills__item">Boa redação para documentação de softwares</li>
                    <li class="skills__item">Versatilidade para atuar como full-stack</li>
                    <li class="skills__item">Conhecimento em versionamento de códigos</li>
                    <li class="skills__item">capacidade para trabalhar em equipe</li>
                    <li class="skills__item">iniciativa para porpor novas ideas à equipe</li>
                    <li class="skills__item">Boa cominicação para instruir usuários</li>
                    <li class="skills__item">Escuta ativa na resoluçã de conflitos</li>
                </ul>
            </section>
            <section class="tools">
                <h2 class="tools__title">
                    FERRAMENTAS
                </h2>
                <ul class="tools__list">
                    <li class="tools__item">
                        Tecnologias para desenvolvimento
                    </li>
                    <li>Web: HTML, CSS e JavaScript</li>
                    <li class="tools__item">
                        Ferramentas de Desenvolvimento: Git, Docker e Jenkins
                    </li>
                    <li class="tools__item">
                        Linguagens de Programação: Java, Pynton e C++
                    </li>
                    <li class="tools__item">
                        Gestão de Banco de dados: SQL, MonogoDB e PostgreSQL
                    </li>
                    <li class="tools__item">
                        Metodologias: Scrum e Kanban
                    </li>
                </ul>
            </section>
        </div>
    </div>

</body>
</html>