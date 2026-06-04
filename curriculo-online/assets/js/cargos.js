


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

                // À DISPOSIÇÃO DA EMPRESA
            case 'À disposição da empresa1':
                    perfil.innerText = 'Pessoa dedicada, organizada e com facilidade de adaptação a novos desafios. Disponível para desempenhar diversas funções, contribuindo com esforço, pontualidade e trabalho em equipe.';
                break;
            case 'À disposição da empresa2':
                    perfil.innerText = 'Em busca de crescimento profissional e desenvolvimento de novas habilidades. Possuo boa comunicação, vontade de aprender e disponibilidade para atuar em diferentes setores da empresa.';
                break;
            case 'À disposição da empresa3':
                    perfil.innerText = 'Profissional comprometido, proativo e disposto a adquirir experiência em diversas áreas. Busco uma oportunidade para contribuir com dedicação, responsabilidade e foco nos objetivos da empresa.';
                break;
            case 'Desenvolvedor Web Full Stack1':
                    perfil.innerText = 'Atuação em desenvolvimento web com PHP, HTML, CSS e JavaScript, além de experiência em suporte técnico, manutenção de computadores e automação de tarefas utilizando VBA e VBScript. Facilidade de aprendizado e adaptação a novos desafios.';
                break;
            case 'Desenvolvedor Web Full Stack2':
                    perfil.innerText = 'Profissional de Tecnologia da Informação com conhecimentos em desenvolvimento de sistemas web, automação de processos, suporte ao usuário e ferramentas de produtividade. Comprometido com a organização, eficiência e melhoria contínua dos processos.';
                break;
            case 'Desenvolvedor Web Full Stack3':
                    perfil.innerText = 'Profissional de Tecnologia da Informação com conhecimentos em desenvolvimento web, suporte técnico, automação de processos e ferramentas do Microsoft Office. Possui perfil organizado, proativo e comprometido com a qualidade dos serviços prestados.';
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
        case 'À disposição da empresa':
            perfil.innerText ='Profissional em busca de oportunidade para ingressar no mercado de trabalho, com disposição para aprender, responsabilidade e comprometimento. Disponível para atuar em diferentes áreas conforme a necessidade da empresa.';
            break;
        case 'Desenvolvedor Web Full Stack':
            perfil.innerText ='Profissional de TI com conhecimentos em desenvolvimento web, automação de processos, suporte técnico e design gráfico. Experiência na utilização de tecnologias para otimização de rotinas, resolução de problemas e apoio às atividades administrativas e operacionais.';
            break;
        default:
            perfil.innerText = 'Profissional em busca de oportunidade para ingressar no mercado de trabalho, com disposição para aprender, responsabilidade e comprometimento. Disponível para atuar em diferentes áreas conforme a necessidade da empresa.';
            break;
    }



})

