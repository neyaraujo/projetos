<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/modal.php';
    $id_logado = $_SESSION['idusuario'];
    $email_logado = $_SESSION['email'];


    if (isset($_GET['idprofissao'])) {
        require_once 'acoes/verifica-logado.php';
        require_once 'acoes/conexao.php';
        $id_logado = $_SESSION['idusuario'];
        $idprofissao = mysqli_real_escape_string($con, $_GET['idprofissao'])?? '';
        $nome_profissao = mysqli_real_escape_string($con, $_GET['nome_profissao'])?? '';
        $descricao = mysqli_real_escape_string($con, $_GET['descricao'])?? '';

        
        


    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/register-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Cadastrar Descrição Profissional</title>
    <style>
        :root {
        --cor01: #0C3C60;
        --cor02: #253541;
        --cor03: #4D33DE;
        --cor04: #000000;
        --cor05: #ffffff;
        --cor06: #6ed1ff;

    --font-padrao: "Roboto", sans-serif;
}
        li, a {
            list-style: none;
            text-decoration: none;
        }



        .header__container {
            min-width: 100%;
        }
        .header__list{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #00527b;
        }
        .header__list-link {
            color: #fff;
        }
        .header__list-item {
            color: #fff;
        }
        .main__subtitulo{
            padding: 10px;
            text-align: center;
        }

@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');



* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: var(--font-padrao), sans-serif
}

body {
    width: 100%;
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

.ability {
    background-color: #fafafa;
    /* border-radius: 14px; */
    max-width: 800px;
    width: 100%;
    box-sizing: 0 3px 5px rgba(0,0,0,0.5);
    overflow: hidden;

}

.header {
    background: var(--cor03);
    padding: 24px;
    text-align: center;
    color: #fff;

}

.ability__form{
    padding: 18px;
}

.ability__content {
    margin-bottom: 8px;
    padding-bottom: 10px ;
    position: relative;
}

.ability__content label {
    display: inline-block;
    margin-bottom: 4px;
}

.ability__content input,
.ability__content select {
    display: block;
    width: 100%;
    border-radius: 8px;
    padding: 8px;
    border: 2px solid #dfdfdf;
}

.ability__content a {
    position: absolute;
    bottom: 0;
    font-size: 0.8em;
    left: 0;
    visibility: hidden;
}

.ability__content {
    position: relative;
}

.ability button {
    width: 100%;
    background: var(--cor01);
    color: var(--cor05);
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
 }

.ability__content.error input {
    border-color: #ff3b25;
    visibility: visible;
}

.ability__content.error a {
    color: #ff3b25;
    visibility: visible;
}

.hidden {
    display: none;
}

    </style>
</head>
<body>
        <header class="header__container">
           <ul class="header__list">
               <li class="header__list-item">CADASTRAR</li>
               <li class="header__list-item"><a class="header__list-link material-symbols-outlined main__edit" href="formacao.php">close</a></li>
           </ul>
       </header>

       <main class="ability">
        <div class="ability__container">
           <h2 class="ability__title">
                Cadastro de Descrição Profissional
           </h2>
            <form class="ability__form" action="acoes/cria-descricao-profissional.php" id="form" method="POST">
                <div class="ability__content">
                </div>       
                <div class="ability__content">
                    <label for="">Profissão</label>
                    <input
                    type="text"
                    name="nome_profissao"
                    id="descricao_profissional"
                    value="<?= ($nome_profissao)?? '' ?>"
                    placeholder="Escolha uma profissão"/>
                    <a></a>
                </div>
                <div class="ability__content">
                    <label for="">Descrição da Profissão</label>
                    <input
                    type="text"
                    name="descricao"
                    id="descricao_profissional"
                    value="<?= ($descricao)?? '' ?>"
                    placeholder=""/>
                    <a></a>
                </div>

                <script>

                        const item = document.getElementById('descricao_profissional');
                        const profissao = document.getElementById('profissao');
                            

                    change()
                        function change () {
                            let texto = profissao.value;
                            item.placeholder = "O que voce fazia como " + texto + "?"

                            profissao.addEventListener('change',()=>{
                                let texto = profissao.value;
                                item.placeholder = "O que voce fazia como " + texto + "?"
                            })

                        }

                </script>

                <!-- PARTES OCULTAS -->
                <input type="text" name="idusuario" id="idusuario" value="<?= $id_logado ?>">
                <input type="text" name="idprofissao" id="idprofissao" value="<?= $_GET['idprofissao']?? '' ?>">
                <button class="btn-primary" type="submit" name="btn_cadastrar">
                    Cadastrar
                </button>
            </form>
        </div>
        <style>
            .ability__list {
                margin-left: 40px;
            }
            .ability__item {
                list-style: disc;
                font-size: 10px;
            }
            .ability__link {
                cursor: pointer;
            }
        </style>

        <?php 
            require_once 'acoes/conexao.php';
            $sql = "SELECT * FROM profissoes
            WHERE idusuario = '$id_logado'";

            $resultado = mysqli_query($con, $sql);

            if ($resultado->num_rows > 0) {
                
                echo "<ul class='ability__list'>";
                while ($dados = mysqli_fetch_assoc($resultado)) {
                    $idprofissao = $dados['idprofissao']?? '';
                    $nome_profissao = $dados['nome_profissao']?? '';
                    $descricao = $dados['descricao']?? '';
                    echo "<li class='ability__item'>
                                <a href='?idprofissao=$idprofissao&nome_profissao=$nome_profissao&descricao=$descricao' class='ability__link'>$nome_profissao</a>
                                </br>
                                <p>$descricao</p>
                        </li>";
                }
                echo "</ul>";
            }
        ?>
        <?= modalMensagem();?>
    </main>
</body>
</html>