<?php

    // iniciar uma nova sessão
    session_start();
    $id_logado = $_SESSION['idusuario'];

    // chamar nossa conexao
    require_once 'conexao.php';

    // verifica se botão foi clicado
    if (isset($_POST['btn_cadastrar'])) {
        $idprofissao = mysqli_real_escape_string($con, $_POST['idprofissao']);
        $nome_profissao = mysqli_real_escape_string($con, $_POST['nome_profissao']);
        $descricao = mysqli_real_escape_string($con, $_POST['descricao']);

        if ($idprofissao === '') {
            if ($nome_profissao === '') {
                $_SESSION['mensagem'] = 'Campo habilidade está vazio';
                header('Location: ../cadastrar-descricao-profissional.php');
                exit();
            } else {
                // CONSULTA
                $sql = "SELECT * FROM profissoes
                WHERE idusuario = '$id_logado'";

                $resultado = mysqli_query($con, $sql);

                if ($resultado->num_rows >=5) {
                    $_SESSION['mensagem'] = 'So é possível 5 cadastros';
                    header('Location: ../cadastrar-descricao-profissional.php');
                    exit();

                } else {//CADASTRA
                    $sql = "INSERT INTO profissoes (nome_profissao, descricao,idusuario)
                    VALUES ('$nome_profissao', '$descricao', '$id_logado')";

                    mysqli_query($con, $sql);
                    unset($idprofissao);
                    header('Location: ../cadastrar-descricao-profissional.php');
                }

                var_dump($resultado);
                exit();
            }

        var_dump($nome_profissao);


        } else {
            if ($nome_profissao === '') {
                $sql = "DELETE FROM profissoes
                WHERE idprofissao = '$idprofissao'";
                mysqli_query($con, $sql);
                unset($idprofissao);
                header('Location: ../cadastrar-descricao-profissional.php');
                exit();
            }
        }

            exit();

        // recebe o conteudo do formulario  
        $nome_profissao = mysqli_real_escape_string($con, $_POST['nome_profissao'])?? '';
        $descricao_profissional = mysqli_real_escape_string($con, $_POST['descricao_profissional']);

        $sql = "SELECT * FROM profissoes
        WHERE nome_profissao = '$nome_profissao'
        AND idusuario = '$id_logado'";

        $resultado = mysqli_query($con, $sql);
        $dados = mysqli_fetch_assoc($resultado);
        $idprofissao = $dados['idprofissao'];

        $sql2 = "UPDATE profissoes
        SET descricao = '$descricao_profissional'
        WHERE idprofissao = '$idprofissao'
        AND idusuario = '$id_logado'";
        mysqli_query($con, $sql2);



        echo "<pre>";
        var_dump($descricao_profissional);
        exit();

         // se idhabilidade = true
        if ($idhabilidade === '') {
            if ($habilidade === '') {
                $_SESSION['mensagem'] = 'Campo habilidade está vazio';
                header('Location: ../cadastrar-habilidade.php');
                exit();
            }

            require_once 'consulta-habilidades-do-usuario.php';
            if ($resultado->num_rows >= 5) {
                $_SESSION['mensagem'] = 'So é possível 5 cadastros';
                header('Location: ../cadastrar-habilidade.php');
                exit();

            } else {
                $sql = "INSERT INTO habilidades (habilidade, idusuario)
                VALUES ('$habilidade', '$id_logado')";
                mysqli_query($con, $sql);
                unset($idhabilidade);

                header('Location: ../cadastrar-habilidade.php');
                exit();
            }

        // se idhabilidade = false
        }else { 
            if ($habilidade === '') {
                $sql = "DELETE FROM habilidades WHERE idhabilidade = '$idhabilidade'";
                mysqli_query($con, $sql);
                unset($idhabilidade);

                header('Location: ../cadastrar-habilidade.php');
                exit();
            } else {
                $sql = "UPDATE habilidades SET
                habilidade = '$habilidade',
                idusuario = '$id_logado'
                WHERE idhabilidade = '$idhabilidade'";
                mysqli_query($con, $sql);
                unset($idhabilidade);

                header('Location: ../cadastrar-habilidade.php');
                exit();
            }
            
        }


        // se o id for vazio
        //


        echo "<pre>";
        var_dump($habilidade);
        var_dump($idhabilidade);
        echo "</pre>";
        // $idhabilidade = '';
        // header('Location: ../cadastrar-habilidade.php');
        exit();
        // recebe o conteudo do formulario
        $habilidade = mysqli_real_escape_string($con, $_POST['habilidade']);
        
        // verifica quantas linhas ja tem
        // se maior igual 3, retorno msg só 3 habilidades
        require_once 'consulta-habilidades-do-usuario.php';
        if ($resultado->num_rows >= 3) {

            // verifica se tem conteudo nos campos
            if (empty($habilidade) && empty($_SESSION['idhabilidade'])) {
                // nao tem valor e não foi gerado id para edição
                // neste caso não faz nada
                echo "vazio";

            } elseif (empty($habilidade) && !empty($_SESSION['idhabilidade'])) {
                // nao tem valor porém foi gerado id para edição
                // edita um item da lista com base no id
                echo "pode edditar";


            // tem valor e nao foi gerado id para edição
            } elseif (!empty($habilidade) && empty($_SESSION['idhabilidade'])) {
                // cria uma item da lista
                $sql = "INSERT INTO habilidades (
                    habilidade, idusuario)
                    VALUES ('$habilidade', '$id_logado')";

                    if (mysqli_query($con, $sql)) {
                        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
                        unset($_SESSION['idhabilidade']);
                        header('Location: ../cadastrar-habilidade.php');
                    }
            // nao tem conteudo e tem id gerado
            } elseif (empty($habilidade) && !empty($_SESSION['idhabilidade'])) {
            // excluir o item da lista
                $sql = "DELETE FROM habilidades WHERE idhabilidade = '$_SESSION'";
            };



            // retorna a pagina de cadastro
            $_SESSION['mensagem'] = "Só é possível 3 habilidades.";
            header('Location: ../cadastrar-habilidade.php');





        } else {
            


        };
    };




        // se o conteudo for vazio e foi gerado id
        // ele exclui o id


    // se o conteuno não for vazio e não foi gerado id
    // cria uma nova habilidade

    // se o conteudo não for vazio e foi gerado id
    // ele atualiza os dados do id


    // se foi vazio e nao foi gerado id
    // nada faz

    
    

       