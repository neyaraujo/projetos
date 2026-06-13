<?php

    // iniciar uma nova sessão
    session_start();
    $id_logado = $_SESSION['idusuario'];

    // chamar nossa conexao
    require_once 'conexao.php';

    // verifica se botão foi clicado
    if (isset($_POST['btn_cadastrar'])) {

        // recebe o conteudo do formulario  
        $informacao = mysqli_real_escape_string($con, $_POST['informacao'])?? '';
        $idinformacao = mysqli_real_escape_string($con, $_POST['idinformacao'])?? '';

         // se idinformacao = true
        if ($idinformacao === '') {
            if ($informacao === '') {
                $_SESSION['mensagem'] = 'Campo informacao está vazio';
                header('Location: ../cadastrar-informacao-adicional.php');
                exit();
            }

            require_once 'consulta-informacoes-adicionais-do-usuario.php';
            if ($resultado->num_rows >= 5) {
                $_SESSION['mensagem'] = 'So é possível 5 cadastros';
                header('Location: ../cadastrar-informacao-adicional.php');
                exit();

            } else {
                $sql = "INSERT INTO informacoes_adicionais (informacao, idusuario)
                VALUES ('$informacao', '$id_logado')";
                mysqli_query($con, $sql);
                unset($idinformacao);

                header('Location: ../cadastrar-informacao-adicional.php');
                exit();
            }

        // se idinformacao = false
        }else { 
            if ($informacao === '') {
                $sql = "DELETE FROM informacoes_adicionais WHERE idinformacao = '$idinformacao'";
                mysqli_query($con, $sql);
                unset($idinformacao);

                header('Location: ../cadastrar-informacao-adicional.php');
                exit();
            } else {
                $sql = "UPDATE informacoes_adicionais SET
                informacao = '$informacao',
                idusuario = '$id_logado'
                WHERE idinformacao = '$idinformacao'";
                mysqli_query($con, $sql);
                unset($idinformacao);

                header('Location: ../cadastrar-informacao-adicional.php');
                exit();
            }
            
        }


        // se o id for vazio
        //


        echo "<pre>";
        var_dump($informacao);
        var_dump($idinformacao);
        echo "</pre>";
        // $idinformacao = '';
        // header('Location: ../cadastrar-informacao-adicional.php');
        exit();
        // recebe o conteudo do formulario
        $informacao = mysqli_real_escape_string($con, $_POST['informacao']);
        
        // verifica quantas linhas ja tem
        // se maior igual 3, retorno msg só 3 informacoes_adicionais
        require_once 'consulta-informacoes_adicionais-do-usuario.php';
        if ($resultado->num_rows >= 3) {

            // verifica se tem conteudo nos campos
            if (empty($informacao) && empty($_SESSION['idinformacao'])) {
                // nao tem valor e não foi gerado id para edição
                // neste caso não faz nada
                echo "vazio";

            } elseif (empty($informacao) && !empty($_SESSION['idinformacao'])) {
                // nao tem valor porém foi gerado id para edição
                // edita um item da lista com base no id
                echo "pode edditar";


            // tem valor e nao foi gerado id para edição
            } elseif (!empty($informacao) && empty($_SESSION['idinformacao'])) {
                // cria uma item da lista
                $sql = "INSERT INTO informacoes_adicionais (
                    informacao, idusuario)
                    VALUES ('$informacao', '$id_logado')";

                    if (mysqli_query($con, $sql)) {
                        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
                        unset($_SESSION['idinformacao']);
                        header('Location: ../cadastrar-informacao-adicional.php');
                    }
            // nao tem conteudo e tem id gerado
            } elseif (empty($informacao) && !empty($_SESSION['idinformacao'])) {
            // excluir o item da lista
                $sql = "DELETE FROM informacoes_adicionais WHERE idinformacao = '$_SESSION'";
            };



            // retorna a pagina de cadastro
            $_SESSION['mensagem'] = "Só é possível 3 informacoes_adicionais.";
            header('Location: ../cadastrar-informacao-adicional.php');





        } else {
            


        };
    };




        // se o conteudo for vazio e foi gerado id
        // ele exclui o id


    // se o conteuno não for vazio e não foi gerado id
    // cria uma nova informacao

    // se o conteudo não for vazio e foi gerado id
    // ele atualiza os dados do id


    // se foi vazio e nao foi gerado id
    // nada faz

    
    

       