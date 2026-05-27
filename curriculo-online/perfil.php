<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    include_once 'acoes/consulta-usuario.php';
    require_once 'acoes/funcoes.php';
    require_once 'acoes/modal.php';
    require_once 'acoes/consulta-cargo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/perfil.css">
</head>
<body>
    <?php require_once "header.php"?>
    <main>
        <section class="perfil">
            <div class="main__album">
                <div class="main__fotos">
                    <img class="main__foto" src="fotos/<?= $_SESSION['foto'] ?>" alt="">
                </div>
                <!-- Este input pertece ao formulario form -->
                <input form="form" class="form__foto" type="file" name="foto" id="foto" value="<?= $foto; ?>" />
            </div>
        </section>
        <section>

        <form class="form" action="acoes/edita-usuario.php" id="form" method="post" enctype="multipart/form-data">

            <div class="form-content">
                <label for="estado-civil">Cargo Pretendido</label>
                <select id="cargo" name="cargo">
                    <optgroup label="Cargo Anterior">
                        <option value="<?= $cargo ?>"><?= $cargo ?></option>
                    </optgroup>
                    <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                    <option value="Recepcionista">Recepcionista</option>
                    <option value="Secretária">Secretária</option>
                    <option value="Vendedor">Vendedor</option>
                    <option value="Analista de Dados">Analista de Dados</option>
                </select>
                <a></a>
            </div>

            <div class="form-content">
                <label for="perfil">Perfil Profissonal</label>

                <textarea class="form__perfil" 
                    name="perfil" 
                    id="perfil"
                    rows="5"
                    maxlength="500">
                    <?= $perfil ?>
                </textarea>
                <p class="perfil__btn" id="btn-next">próximo>></p>
                <style>

                    .form__perfil {
                        padding: 5px;
                        width: 100%;
                        text-align: left;
                        font-size: 12px;
                    }
                    .perfil__btn {
                        font-size: 12px;
                        color: white;
                        font-style: italic;
                        padding: 5px;
                        display: inline-block;
                        background: #282828;
                        border-radius: 5px;
                        font-weight: 600;
                        cursor: pointer;

                    }
                </style>
            </div>
            <div class="form-content">
                <label for="nome"><sup>*</sup>Nome Completo</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="<?= $_SESSION['nome'] ?>"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="nacionalidade">Nacionalidade</label>
                <input 
                type="text" 
                name="nacionalidade" 
                id="nacionalidade"
                value="Brasileiro(a)"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="estado-civil">Estado Civil</label>
                <select id="estado-civil" name="estado-civil">
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Solteiro">Casado(a)</option>
                    <option value="Solteiro">Viúvo(a)</option>
                    <option value="Solteiro">Divorciado(a)</option>
                </select>
                <a id="msg"></a>
            </div>
            <div class="form-content">
                <label for="genero">genero</label>
                <select id="genero" name="genero">
                    <option value="Solteiro">Masculino</option>
                    <option value="Solteiro">Feminino</option>
                </select>
                <a></a>
            </div>
            <div class="form-content">
                <label for="idade">Idade</label>
                <input 
                type="number" 
                name="idade" 
                id="idade"
                value="<?= $_SESSION['idade'] ?>"
                step="1"
                min="1"
                placeholder="Digite sua idade"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="endereco">Cidade, Estado</label>
                <input 
                type="text" 
                name="endereco" 
                id="endereco"
                value="<?= $_SESSION['endereco'] ?>"
                placeholder="Pinheiro, Maranhão..."/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="celular">Celular</label>
                <input 
                type="tel" 
                name="celular" 
                id="celular"
                value="<?= $_SESSION['celular'] ?>"
                placeholder="(98) xxxx-xxx"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="email"><sup>*</sup>E-mail</label>
                <input 
                type="email" 
                name="email" 
                id="email"
                value="<?= $_SESSION['email'] ?>"
                autocomplete="email"
                placeholder="exemplo@gmail.com"/>
                <a></a>
            </div>
            <button class="btn-primary" type="submit" name="btn_atualizar">Atualizar</button>
        </form>
        </section>
    </main>

<?php modalMensagem()?>
    
<?php require_once "footer.php"?>    
<script src="assets/js/header.js"></script>
<script src="assets/js/cargos.js"></script>

</body>
</html>