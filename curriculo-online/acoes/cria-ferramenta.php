<?php

    // iniciar uma nova sessão
    session_start();
    $id_logado = $_SESSION['idusuario'];

    // chamar nossa conexao
    require_once 'conexao.php';

    // verifica se botão foi clicado
    if (isset($_POST['btn_cadastrar'])) {

        // recebe o conteudo do formulario  
        $ferramenta = mysqli_real_escape_string($con, $_POST['ferramenta'])?? '';
        $idferramenta = mysqli_real_escape_string($con, $_POST['idferramenta'])?? '';

         // se idferramenta = true
        if ($idferramenta === '') {
            if ($ferramenta === '') {
                $_SESSION['mensagem'] = 'Campo ferramenta está vazio';
                header('Location: ../cadastrar-ferramenta.php');
                exit();
            }

            require_once 'consulta-ferramentas-do-usuario.php';
            if ($resultado->num_rows >= 5) {
                $_SESSION['mensagem'] = 'So é possível 5 cadastros';
                header('Location: ../cadastrar-ferramenta.php');
                exit();

            } else {
                $sql = "INSERT INTO ferramentas (ferramenta, idusuario)
                VALUES ('$ferramenta', '$id_logado')";
                mysqli_query($con, $sql);
                unset($idferramenta);

                header('Location: ../cadastrar-ferramenta.php');
                exit();
            }

        // se idferramenta = false
        }else { 
            if ($ferramenta === '') {
                $sql = "DELETE FROM ferramentas WHERE idferramenta = '$idferramenta'";
                mysqli_query($con, $sql);
                unset($idferramenta);

                header('Location: ../cadastrar-ferramenta.php');
                exit();
            } else {
                $sql = "UPDATE ferramentas SET
                ferramenta = '$ferramenta',
                idusuario = '$id_logado'
                WHERE idferramenta = '$idferramenta'";
                mysqli_query($con, $sql);
                unset($idferramenta);

                header('Location: ../cadastrar-ferramenta.php');
                exit();
            }
            
        }


        // se o id for vazio
        //


        echo "<pre>";
        var_dump($ferramenta);
        var_dump($idferramenta);
        echo "</pre>";
        // $idferramenta = '';
        // header('Location: ../cadastrar-ferramenta.php');
        exit();
        // recebe o conteudo do formulario
        $ferramenta = mysqli_real_escape_string($con, $_POST['ferramenta']);
        
        // verifica quantas linhas ja tem
        // se maior igual 3, retorno msg só 3 ferramentas
        require_once 'consulta-ferramentas-do-usuario.php';
        if ($resultado->num_rows >= 3) {

            // verifica se tem conteudo nos campos
            if (empty($ferramenta) && empty($_SESSION['idferramenta'])) {
                // nao tem valor e não foi gerado id para edição
                // neste caso não faz nada
                echo "vazio";

            } elseif (empty($ferramenta) && !empty($_SESSION['idferramenta'])) {
                // nao tem valor porém foi gerado id para edição
                // edita um item da lista com base no id
                echo "pode edditar";


            // tem valor e nao foi gerado id para edição
            } elseif (!empty($ferramenta) && empty($_SESSION['idferramenta'])) {
                // cria uma item da lista
                $sql = "INSERT INTO ferramentas (
                    ferramenta, idusuario)
                    VALUES ('$ferramenta', '$id_logado')";

                    if (mysqli_query($con, $sql)) {
                        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
                        unset($_SESSION['idferramenta']);
                        header('Location: ../cadastrar-ferramenta.php');
                    }
            // nao tem conteudo e tem id gerado
            } elseif (empty($ferramenta) && !empty($_SESSION['idferramenta'])) {
            // excluir o item da lista
                $sql = "DELETE FROM ferramentas WHERE idferramenta = '$_SESSION'";
            };



            // retorna a pagina de cadastro
            $_SESSION['mensagem'] = "Só é possível 3 ferramentas.";
            header('Location: ../cadastrar-ferramenta.php');





        } else {
            


        };
    };




        // se o conteudo for vazio e foi gerado id
        // ele exclui o id


    // se o conteuno não for vazio e não foi gerado id
    // cria uma nova ferramenta

    // se o conteudo não for vazio e foi gerado id
    // ele atualiza os dados do id


    // se foi vazio e nao foi gerado id
    // nada faz

    
    

       