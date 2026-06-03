const nome_profissao = document.getElementById('nome-profissao');
const descricao_01 = document.getElementById('descricao-01');
const descricao_02 = document.getElementById('descricao-02');
const descricao_03 = document.getElementById('descricao-03');

nome_profissao.addEventListener('blur',()=> {
    switch (nome_profissao.value) {
        case 'Auxiliar Administrativo':
                descricao_01.innerText = 'Descrição 01';
                descricao_02.innerText = 'Descrição 02';
                descricao_03.innerText = 'Descrição 03';
            break;
    
        default:
            break;
    }


})

