


const cargo = document.getElementById('cargo');
const perfil = document.getElementById('perfil');
const btn_next = document.getElementById('btn-next');

contador = 0;

btn_next.addEventListener('click', () => {
    contador++
    if (contador > 3) {
        contador = 1
    }
    
    switch (cargo.value + contador) {
        case 'Auxiliar Administrativo1':
                perfil.innerText = 'Profissional organizado e responsável, com habilidade em rotinas administrativas, atendimento ao público, controle de documentos e apoio às atividades operacionais da empresa.';
            break;
        case 'Auxiliar Administrativo2':
                perfil.innerText = 'Auxiliar administrativo dedicado, com facilidade em organização de arquivos, lançamento de informações, suporte administrativo e atendimento, contribuindo para a eficiência do setor.';
            break;
        case 'Auxiliar Administrativo3':
                perfil.innerText = 'Profissional proativo e comunicativo, com experiência em atividades administrativas, elaboração de relatórios, atendimento ao cliente e suporte às demandas internas da empresa.';
            break;

        // RECEPCIONISTA
        
        case 'Recepcionista1':
                perfil.innerText = 'Profissional comunicativo e cordial, com experiência em atendimento ao público, recepção de clientes, organização de agendas e suporte administrativo.';
            break;
        case 'Recepcionista2':
                perfil.innerText = 'Recepcionista organizada e atenciosa, com habilidade em atendimento presencial e telefônico, controle de informações e apoio às rotinas administrativas.';
            break;
        case 'Recepcionista3':
                perfil.innerText = 'Profissional proativa e responsável, com facilidade em atendimento ao cliente, direcionamento de visitantes e organização do ambiente de recepção, prezando pela qualidade no atendimento.';
            break;
            
            // SECRETÁRIA
            case 'Secretária1':
                    perfil.innerText = 'Profissional organizada e discreta, com experiência em atendimento, controle de agendas, elaboração de documentos e suporte às rotinas administrativas.';
                break;
            case 'Secretária2':
                    perfil.innerText = 'Secretária responsável e comunicativa, com habilidade em organização de compromissos, atendimento telefônico e apoio administrativo, contribuindo para a eficiência do setor.';
                break;
            case 'Secretária3':
                    perfil.innerText = 'Profissional proativa e dedicada, com facilidade em gerenciamento de informações, atendimento ao público e suporte executivo, mantendo organização e agilidade nas atividades diárias.';
                break;

            // VENDEDOR
            case 'Vendedor1':
                    perfil.innerText = 'Profissional comunicativo e dinâmico, com habilidade em atendimento ao cliente, negociação e vendas, focado em alcançar metas e oferecer um atendimento de qualidade.';
                break;
            case 'Vendedor2':
                    perfil.innerText = 'Vendedor responsável e proativo, com experiência em abordagem ao cliente, organização de produtos e fechamento de vendas, buscando sempre a satisfação e fidelização dos clientes.';
                break;
            case 'Vendedor3':
                    perfil.innerText = 'Profissional com facilidade em comunicação e relacionamento interpessoal, atuando com dedicação no atendimento, divulgação de produtos e suporte ao cliente durante o processo de venda.';
                break;

                // ANALISTA DE DADOS
            case 'Analista de Dados1':
                    perfil.innerText = 'Profissional com conhecimento em Excel e Power BI, focado em organização de dados, criação de relatórios e análise de informações. Possui perfil analítico, atenção aos detalhes e facilidade com tecnologia.';
                break;
            case 'Analista de Dados2':
                    perfil.innerText = 'Estudante e entusiasta da área de análise de dados, com habilidades em Excel avançado e Power BI para desenvolvimento de dashboards, planilhas automatizadas e acompanhamento de indicadores.';
                break;
            case 'Analista de Dados3':
                    perfil.innerText = 'Profissional organizado e proativo, com experiência em Excel e Power BI para controle de dados, geração de relatórios gerenciais e apoio na tomada de decisões através de análises eficientes.';
                break;

        default:
            break;
    }



});
    
if (perfil.contains = '') {

}

cargo.addEventListener('blur',()=>{

    switch (cargo.value) {
        case 'Auxiliar Administrativo':
            perfil.innerText = ' Profissional responsável e dedicado, com habilidade em rotinas administrativas, arquivamento de documentos, atendimento e suporte operacional, mantendo organização e agilidade nas atividades diárias.';
            break;
        case 'Recepcionista':
            perfil.innerText = 'Profissional comunicativo e cordial, com experiência em atendimento ao público, recepção de clientes, organização de agendas e suporte administrativo, prezando por um atendimento eficiente e acolhedor.';
            break;
        case 'Secretária':
            perfil.innerText = 'Profissional organizada e discreta, com experiência no gerenciamento de agendas, atendimento, elaboração de documentos e suporte administrativo, garantindo eficiência e bom funcionamento das rotinas corporativas.';
            break;
        case 'Vendedor':
            perfil.innerText ='Profissional dinâmico e comunicativo, com habilidade em atendimento ao cliente, negociação e vendas, focado em alcançar resultados, fidelizar clientes e oferecer um atendimento de qualidade.';
            break;
        case 'Analista de Dados':
            perfil.innerText ='Profissional dedicado, com conhecimentos em Excel e Power BI para tratamento de dados, criação de gráficos e elaboração de dashboards interativos. Facilidade em aprender novas ferramentas e atuar com foco em resultados.';
            break;
        default:
            perfil.innerText = '';
            break;
    }



})

