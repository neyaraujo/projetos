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
    <link rel="stylesheet" href="assets/css/historico-profissional.css">
</head>
<body>
    <?php require_once "header.php"?>
    <main>
        <form class="form" action="acoes/edita-usuario.php" id="form" method="post">
            <h1>Histórico Profissional</h1>
            <div class="form-content">
                <label for="nome">Profissão</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="Servidor Público"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="nome">Instituição</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="Prefeitura Municipal"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="nome">Cidade</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="Pinheiro"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="nome">Estado</label>
                <input 
                type="text" 
                name="nome" 
                id="nome"
                value="Maranhão"
                placeholder="Digite seu nome completo"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="idade">Ano Entrada</label>
                <input 
                type="number" 
                name="idade" 
                id="idade"
                value="2020"
                step="1"
                min="1900"
                maxlength="4"
                placeholder="Digite sua idade"/>
                <a></a>
            </div>
            <div class="form-content">
                <label for="idade">Ano Saída</label>
                <input 
                type="number" 
                name="idade" 
                id="idade"
                value="2026"
                step="1"
                min="1900"
                maxlength="4"
                placeholder="Digite sua idade"/>
                <a></a>
            </div>
            <div class="form-content descricao">
                <label class="descricao__titulo" for="">Descrição da profissão</label>
                <div class="descricao__container">
                    <textarea name="" id="" class="descricao__texto" rows="5">
                    </textarea>
                    <span class="descricao__btn btn">Adicionar</span>
                </div>
                <ul class="descricao__list">
                    <li class="descricao__item">
                        Apoio administrativo e tecnológico na criação de tabelas, organização e manipulação de dados, auxiliando processos internos da administração pública.
                    </li>
                    <li class="descricao__item">
                        Apoio administrativo e tecnológico na criação de tabelas, organização e manipulação de dados, auxiliando processos internos da administração pública.
                    </li>
                </ul>
            </div>
            <style>
                .descricao__container {
                    display: flex;
                    gap: 10px;
                }
                .descricao__texto {
                    flex: 1 0 auto;
                }  
                .descricao__btn {
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
                .descricao__list {
                    display: flex;
                    flex-direction: column;
                    margin-top: 10px;
                    margin-left: 20px;
                    gap: 10px;
                }
                .descricao__item {
                    list-style: disc;
                    
                    font-size: 12px;
                }
            </style>

           

            <button class="btn-primary" type="submit" name="btn_atualizar">Atualizar</button>
        </form>
        </section>
    </main>

<?php modalMensagem()?>
    
<?php require_once "footer.php"?>    
<script src="assets/js/header.js"></script>
</body>
</html>