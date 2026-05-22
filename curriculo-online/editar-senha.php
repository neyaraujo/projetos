<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/consulta-usuario.php';
    require_once 'acoes/funcoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Senha</title>
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
        body {
            max-width: 100%;
            min-height: 100vh;
            background-color: #ccc;
            color: #333;
            background: #0C3C60;
            font-family: var(--font-padrao);
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
            max-width: 400px;
            margin: 0 auto;
            min-height: calc(100vh - 20vh);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            text-align: center;;
        }

        .configuracao {
            min-width: 100%;
        }
        .configuracao__title {
            color: #fff;
            padding: 5px;
        }
        .configuracao__label {
            padding: 5px;
            color: #fff;
        }
        .configuracao__input {
            padding: 5px;
        }
        .configuracao__form {
        
        }
        .configuracao__senha {
                padding: 20px;
                display: flex;
                flex-direction: column;        
        }
        .configuracao__input {

        }
        .configuracao__submit {
            padding: 5px 20px;
            border-radius: 3px;
            border: none;
        }
        .erro.ativo {
            background: #ffa200;
            padding: 5px;
        }


    </style>
</head>
<body>
    <header class="header">
            <div class="header__container">
                <div class="header__name">
                    <h1 class="header__title">
                        <strong>Currículo</strong><span class="header__title--italic">Online</span>
                    </h1>
                </div>
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li class="header__item"><a class="header__link material-symbols-outlined main__edit" href="painel.php">Close</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <main class="main">
            <section class="configuracao">

                <h2 class="configuracao__title">Editar Senha</h2>

                <form class="configuracao__form" action="acoes/edita-senha.php" method="POST">
                    <div class="configuracao__senha">
                        <label class="configuracao__label" for="senha">Nova Senha</label>
                        <input class="configuracao__input" type="password" name="nova_senha" id="nova_senha" minlength="6">
                    </div>
                    <a class="erro"></a>
                    <div class="configuracao__senha">
                        <label class="configuracao__label" for="confirma_senha">Confirmação de Senha</label>
                        <input class="configuracao__input" type="password" name="conf_senha" id="conf_senha" minlength="6">
                    </div>
                    <button class="configuracao__submit" type="submit" id="btn_editar" name="btn_editar">Editar</button>
                </form>
            </section> 
    </main>
    <script>
        const senha = document.getElementById("nova_senha");
        const confirma_senha = document.getElementById("conf_senha");
        const btn_editar = document.getElementById('btn_editar');
        const mensagem = document.querySelector('.erro');

        btn_editar.addEventListener('click', function () {
            const senhaValor = senha.value;
            const confirmaValor = confirma_senha.value;
            if (senhaValor === '') {
                mensagem.classList.add('ativo')
                mensagem.textContent = "Preencha o campo senha"
                senha.focus();
                event.preventDefault();
                return
            } else if (senhaValor !== confirmaValor){
                mensagem.classList.add('ativo')
                mensagem.textContent = "As senhas são diferentes"
                event.preventDefault();
            } else {
                mensagem.classList.remove('ativo')
            }    
        })
    </script>
</body>
</html>