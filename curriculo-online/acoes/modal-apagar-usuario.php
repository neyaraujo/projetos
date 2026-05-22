<?php
session_start();
require_once 'verifica-logado.php';
require_once 'consulta-usuario.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cadastro</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f0f0f0;
        }

        /* FUNDO ESCURO */
        .modal {
            position: fixed;
            inset: 0;

            background: rgba(0,0,0,0.5);

            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CAIXA */
        .modal-content {
            width: 400px;
            background: white;
            padding: 25px;
            border-radius: 10px;

            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .modal-content h2 {
            color: #c0392b;
        }

        .modal-content p {
            color: #444;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .buttons a,
        .buttons button {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .cancelar {
            background: #ccc;
            color: black;
        }

        .excluir {
            background: #e74c3c;
            color: white;
        }

        .excluir:hover {
            background: #c0392b;
        }

    </style>
</head>
<body>

    <div class="modal">

        <div class="modal-content">

            <h2>Excluir Cadastro</h2>

            <p>
                Tem certeza que deseja excluir este cadastro?
            </p>

            <div class="buttons">

                <a href="../configuracoes.php" class="cancelar">
                    Cancelar
                </a>

                <form action="apaga-usuario.php" method="POST">

                    <input type="hidden" name="idusuario" value="<?= $_SESSION['idusuario'] ?>">

                    <button type="submit" class="excluir" name="btn_apagar">
                        Excluir
                    </button>

                </form>

            </div>

        </div>

    </div>

</body>
</html>