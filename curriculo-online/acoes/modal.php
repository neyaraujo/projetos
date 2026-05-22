<?php

function modalMensagem() {

    if(isset($_SESSION['mensagem'])) {

        echo '

        <style>

            .modal{
                position: fixed;
                top: 0;
                left: 0;

                width: 100%;
                height: 100vh;

                background: rgba(0,0,0,0.5);

                display: flex;
                justify-content: center;
                align-items: center;
            }

            .modal__box{
                background: white;
                padding: 30px;
                border-radius: 10px;
                min-width: 300px;
                text-align: center;
            }

            .modal__button{
                margin-top: 15px;
                padding: 10px 20px;
                cursor: pointer;
            }

        </style>

        <div class="modal" id="modal">

            <div class="modal__box">

                <p>' . $_SESSION['mensagem'] . '</p>

                <button class="modal__button" onclick="fecharModal()">
                    Fechar
                </button>

            </div>

        </div>

        <script>

            function fecharModal() {
                document.getElementById("modal").style.display = "none";
            }

        </script>

        ';

        unset($_SESSION['mensagem']);
    }
}
?>