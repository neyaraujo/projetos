<?php 
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/modal.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Histórico Profissional</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/historico-profissional.css">
</head>
<body>
    <?php require_once "header.php"?>
    <main>
        <form class="form" action="acoes/cria-historico.php" id="form" method="post">
            <h1 class="form__title">Histórico Profissional</h1>
            <div class="form-content">
                <label for="nome-profissao">Profissão</label>
                <input 
                type="text" 
                name="nome_profissao" 
                id="nome-profissao"
                value=""
                list="lista-profissoes"
                placeholder="Digite seu nome completo"/>
                <a></a>
                <datalist id="lista-profissoes">
                    <option value="Auxiliar Administrativo"></option>
                    <option value="Vendedor"></option>
                    <option value="Digitador"></option>
                </datalist>
            </div>
            <div class="form-content">
                <label for="instituicao">Instituição</label>
                <input 
                type="text" 
                name="instituicao" 
                id="instituicao"
                value=""
                placeholder="Digite o nome da instituição"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="cidade">Cidade</label>
                <input 
                type="text" 
                name="cidade" 
                id="cidade"
                value=""
                placeholder="Digite o nome da cidade"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="estado">Estado</label>
                <input 
                type="text" 
                name="estado" 
                id="estado"
                value=""
                placeholder="MA"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="ano-entrada">Mês/Ano Entrada</label>
                <input 
                type="text" 
                name="ano_entrada" 
                id="ano-entrada"
                value=""
                step="1"
                min="1900"
                maxlength="7"
                placeholder="03/2025"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="ano-saida">Mês/Ano Saída</label>
                <input 
                    type="text" 
                    name="ano_saida" 
                    id="ano-saida"
                    value=""
                    step="1"
                    min="1900"
                    maxlength="7"
                    placeholder="03/2026"/>
                <a></a>
            </div>
            <style>
                .flex {
                    display: flex;
                    justify-content: space-between;
                }
                .historico__add {
                    cursor: pointer;
                    padding: 5px;
                    background: #ccc;
                    margin: 2px;
                    border-radius: 3px;
                    font-size: 10px;
                }
                .form__title {
                    font-size: 16px;
                    text-align: center;
                }
                .profession__item {
                    display: flex;
                    flex-direction: column;
                }
                .profession-description__textarea{
                    flex: 1 0 auto;
                }  
                .profession-description__button {
                    flex: 0 1 100px;   
                }
                .btn {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    padding: 5px;
                    border-radius: 5px;
                    border: 1px solid #5d5d5d;
                }
                .profession-description__list {
                    display: flex;
                    flex-direction: column;
                    margin-top: 10px;
                    margin-left: 20px;
                }
                .profession-description__item {
                    list-style: disc;
                    font-size: 12px;
                }
            </style>

            <button class="btn-primary" type="submit" name="btn_cadastrar">Cadastrar</button>
        </form>
    </main>
<?php modalMensagem()?>
    
<?php require_once "footer.php"?>    
<script src="assets/js/header.js"></script>
<script src="assets/js/historico-profissional.js"></script>
</body>
</html>