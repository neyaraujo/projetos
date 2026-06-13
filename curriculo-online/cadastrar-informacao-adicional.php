<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/modal.php';
    $id_logado = $_SESSION['idusuario'];
    $email_logado = $_SESSION['email'];


    if (isset($_GET['id'])) {
        require_once 'acoes/verifica-logado.php';
        require_once 'acoes/conexao.php';
        $id_logado = $_SESSION['idusuario'];
        $idinformacao = mysqli_real_escape_string($con, $_GET['id'])?? '';
        $informacao = mysqli_real_escape_string($con, $_GET['informacao'])?? '';
        
        


    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/register-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Cadastrar Formação</title>
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

.information {
    background-color: #fafafa;
    /* border-radius: 14px; */
    max-width: 800px;
    width: 100%;
    box-sizing: 0 3px 5px rgba(0,0,0,0.5);
    overflow: hidden;

}
.information__title {
    font-size: 16px;
    text-align: center;
    padding: 10px;
}

.header {
    background: var(--cor03);
    padding: 24px;
    text-align: center;
    color: #fff;

}

.information__form{
    padding: 18px;
}


.information__content {
    margin-bottom: 8px;
    padding-bottom: 10px ;
    position: relative;
}

.information__content label {
    display: inline-block;
    margin-bottom: 4px;
    font-size: 14px;
}

.information__content input,
.information__content select {
    display: block;
    width: 100%;
    border-radius: 8px;
    padding: 8px;
    border: 2px solid #dfdfdf;
    font-size: 12px;
}

.information__content a {
    position: absolute;
    bottom: 0;
    font-size: 0.8em;
    left: 0;
    visibility: hidden;
}

.information__content {
    position: relative;
}

.information button {
    width: 100%;
    background: var(--cor01);
    color: var(--cor05);
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
 }

.information__content.error input {
    border-color: #ff3b25;
    visibility: visible;
}

.information__content.error a {
    color: #ff3b25;
    visibility: visible;
}

    </style>
</head>
<body>
        <header class="header__container">
           <ul class="header__list">
               <li class="header__list-item">CADASTRAR</li>
               <li class="header__list-item"><a class="header__list-link material-symbols-outlined main__edit" href="painel.php">close</a></li>
           </ul>
       </header>
    
       <main class="information">
        <div class="information__container">
           <h2 class="information__title">
                Informações Adicionais
           </h2>
            <form class="information__form" action="acoes/cria-informacao-adicional.php" id="form" method="POST">
                <div class="information__content">
                    <label for="informacao">Informação
                    </label>
                    <input
                    type="text"
                    name="informacao"
                    id="informacao"
                    value="<?= ($informacao)?? '' ?>"
                    placeholder="O que você sabe fazer?"/>
                    <a></a>
                </div>

                <!-- PARTES OCULTAS -->
                <input type="hidden" name="idusuario" id="idusuario" value="<?= $id_logado ?>">
                <input type="hidden" name="idinformacao" id="idinformacao" 
                value="<?= ($idinformacao)?? '' ?>">

                <button id="btn_cadastrar" class="btn-primary" type="submit" name="btn_cadastrar">
                    Cadastrar
                </button>
            </form>
        </div>
        <style>
            .information__list {
                margin-left: 40px;
            }
            .information__item {
                list-style: disc;
                font-size: 10px;
                margin-bottom: 10px;
            }
            .information__link {
                cursor: pointer;
                color: #000000;
            }
        </style>
        <?php require_once 'acoes/consulta-informacoes-adicionais-do-usuario.php';?>
        <?php 
            if ($resultado->num_rows > 0) {
                
                echo "<ul class='information__list'>";
                while ($dados = mysqli_fetch_assoc($resultado)) {
                    $idinformacao = $dados['idinformacao'];
                    $informacao = $dados['informacao'];
                    echo "<li class='information__item' name='informacao'>
                                <a href='?id=$idinformacao&informacao=$informacao' class='information__link'>$informacao</a>
                        </li>";
                }
                echo "</ul>";
            }
        ?>
        <?= modalMensagem();?>
    </main>

    <script>
        let idinformacao = document.getElementById('idinformacao');
        let btn = document.getElementById('btn_cadastrar');
            if (idinformacao.value.length > 0) {
                btn.textContent = 'Editar';
            } else {
                btn.textContent = 'Cadastrar';
            }
    </script>
</body>
</html>