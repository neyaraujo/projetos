<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/conexao.php';
    include_once 'acoes/consulta-curso.php';

    $id_logado = $_SESSION['idusuario'];
    $email_logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/register-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Cadastrar Cursos</title>
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
}

.form-content input,
.form-content select {
    display: block;
    width: 100%;
    border-radius: 8px;
    padding: 8px;
    border: 2px solid #dfdfdf;
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
               <li class="header__list-item">EDITAR</li>
               <li class="header__list-item"><a class="header__list-link material-symbols-outlined main__edit" href="curso.php">close</a></li>
           </ul>
       </header>
    
    <div class="container">
       <main>
           <h2 class="main__subtitulo">Editar Curso</h2>

            <form class="form" action="acoes/edita-curso.php" id="form" method="POST">
                <div class="form-content">
                    <label for="curso">Nome do Curso</label>
                    <input
                    type="text"
                    name="nome_curso"
                    id="nome_curso"
                    value="<?= $nome_curso ?>"
                    placeholder=""/>
                    <a></a>
                </div>
                <div class="form-content">
                    <label for="instituicao">Instituição</label>
                    <input
                    type="text"
                    name="instituicao"
                    id="instituicao"
                    value="<?= $instituicao ?>"
                    placeholder=""/>
                    <a></a>
                </div>
                <div class="form-content">
                    <label for="ano_curso">Ano do Curso</label>
                    <input
                    type="number"
                    name="ano_curso"
                    id="ano_curso"
                    value="<?= $ano_curso ?>"
                    placeholder=""/>
                    <a></a>
                </div>
                <input type="hidden" name="idcurso" id="idcurso" value="<?= $idcurso ?>">
                <button class="btn-primary" type="submit" name="btn_editar">Editar</button>
            </form>
              </div>
       </main>
    
</body>
</html>