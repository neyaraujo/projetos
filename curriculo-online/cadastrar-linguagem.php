<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    $id_logado = $_SESSION['idusuario'];
    $email_logado = $_SESSION['email'];
    require_once 'acoes/modal.php';

    if (isset($_GET['idlinguagem'])) {
        $idlinguagem = $_GET['idlinguagem'];
        $linguagem = $_GET['linguagem'];
        $nivel = $_GET['nivel'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/register-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Cadastrar Linguagens</title>
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
            font-size: 16px
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

.container {
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

.form{
    padding: 18px;
}

.form-content {
    margin-bottom: 8px;
    padding-bottom: 18px ;
    position: relative;
}

.form-content label {
    display: inline-block;
    margin-bottom: 4px;
    font-size: 14px;
}

.form-content input,
.form-content select {
    display: block;
    width: 100%;
    border-radius: 8px;
    padding: 8px;
    border: 2px solid #dfdfdf;
    font-size: 12px;
}

.form-content a {
    position: absolute;
    bottom: 0;
    font-size: 0.8em;
    left: 0;
    visibility: hidden;
}

.form-content {
    position: relative;
}

.form button {
    width: 100%;
    background: var(--cor01);
    color: var(--cor05);
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
 }

.form-content.error input {
    border-color: #ff3b25;
    visibility: visible;
}

.form-content.error a {
    color: #ff3b25;
    visibility: visible;
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
    
    <div class="container">
       <main>
           <h2 class="main__subtitulo">
            Cadastar Linguagens
           </h2>
            <form class="form" action="acoes/cria-linguagem.php" id="form" method="POST">
                <div class="form-content">
                    <label for="nome_curso">Nome da Linguagem</label>
                    <input
                    type="text"
                    value="<?= ($linguagem)?? '' ?>"
                    name="linguagem"
                    id="linguagem"
                    placeholder=""/>
                    <a></a>
                </div>
                <div class="form-content">
                    <label for="nivel">Nivel de Linguagem</label>

                    <select id="nivel" name="nivel">
                        <?php 
                        if (isset($idlinguagem)) {
                            echo "
                            <option value='$nivel'>$nivel</option>
                            ";
                        }
                        ?>

                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                        <option value="Expercialista">Especialista</option>
                    </select>
                    <a></a>
                </div>
                <input type="hidden" name="idusuario" id="idusuario" value="<?= $id_logado ?>">
                <input type="hidden" name="idlinguagem" id="idlinguagem" value="<?= ($idlinguagem)?? '' ?>">
                <button class="btn-primary" type="submit" name="btn_cadastrar">Cadastrar</button>
            </form>

            <!-- LISTA DE LINGUAGENS DE PROGRAMAÇÃO -->
                <?php 
                    require_once 'acoes/conexao.php';

                    $sql = "SELECT * FROM linguagens
                    WHERE idusuario = '$id_logado'";
                    $resultado = mysqli_query($con, $sql);

                    echo "
                        <ul class='linguagem__list'>";
                        
                        while ($dados = mysqli_fetch_assoc($resultado)) {
                            $linguagem = $dados['linguagem'];
                            $idlinguagem = $dados['idlinguagem'];
                            $nivel = $dados['nivel'];
                            echo "
                                <li class='linguagem__item'>
                                    <a class='linguagem__link' href='?idlinguagem=$idlinguagem&linguagem=$linguagem&nivel=$nivel'>$linguagem</a>
                                </li>";
                        }
                    echo "
                        </ul>";

                    
                ?>

              </div>
              <style>
                .linguagem__list {
                    margin-left: 40px;
                }

                .linguagem__item {
                    list-style: disc;
                }
                .linguagem__link {
                    color: #000000;
                    font-size: 12px;
                }
              </style>
       </main>
       <?php modalMensagem();?>
    
</body>
</html>