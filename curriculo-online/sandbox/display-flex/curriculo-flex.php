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
            font-size: 20px;
            max-width: 21cm;
            padding: 10px;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        .header__title {
            font-size: 36pt;
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

        @media print {
            seletor {
                propriedade: valor;
            }
        }

    </style>
</head>
<body>

    <div class="header">
        <div class="header__img--circle">
            <img class="header__img" src="img/image.png" alt="">
        </div>
        <div class="header__dados">
            <h1 class="header__title">Ana Clara da Silva</h1>
            <ul class="header__list">
                <li class="header__item">28 anos</li>
                <li class="header__item">Brasileiro(o)</li>
            </ul>
            <address class="header__endereco">
                Endereço: Rua Alegre, nº 123 - Bairro Antigo Aeroporto - Brasilia - MA <br>
                Telefone:(12) 3456-7890
                Email: ola@gmail.com
            </address>
        </div>
    </div>

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
            <li class="main__item">MBA em Gestão de Projetos</li>
            <li class="main__item">Fundação Getúlo Vargas (FGB) - São Paulo/SP</li>
            <li class="main__item">Concluído em junho de 2020</li>
            <li class="main__item">Bacharelado em Administração de empresas</li>
            <li class="main__item">Universidade Federal de São Paulo(UNIFEP) - São Paulo/SP</li>
            <li class="main__item">Concluído em dezembro de 2015</li>
        </ul>

        <h2 class="main__title">Habilidades</h2>
        <hr class="main__row">

        <ul class="main__list">
            <li class="main__item">Gestão de Projetos - Avançado</li>
            <li class="main__item">Pacote Office(Excel, PowePoint) - Avançado</li>
            <li class="main__item">Inglês - Fluente</li>
            <li class="main__item">Cominicação e Negociação - Avançado</li>
            <li class="main__item">Liderança e Desenvolvimento de Equipes - Avançado</li>
        </ul>
    </main>

</body>
</html>