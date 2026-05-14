const form = document.getElementById("form");
const email = document.getElementById("email");
const senha = document.getElementById("senha");

form.addEventListener("submit",(event) =>{
    event.preventDefault();

    checkForm()
})

function checkInputSenha(){
    const senhaValue = senha.value;

    if(senhaValue === ''){
        erroInput(senha, "A senha é obrigatória");
    }else if(senhaValue.length < 6){
        erroInput(senha, "A sua senha precisa ter no mínimo 6 caracteres.");
    }else {
        const formItem = senha.parentElement;
        formItem.classList.remove('error');
    }

}

function erroInput(input, message){
    const formItem = input.parentElement;
    const textMessage = formItem.querySelector("a");

    textMessage.innerText = message;

    formItem.classList.add('error');
}


function checkForm() {
    checkInputSenha();

    const formItems = form.querySelectorAll(".field");

    const isValid = [...formItems].every((item) => {
        return !item.classList.contains('error');
    });

    if (isValid) {
        alert("LOGIN ACEITO");
        location.assign('principal.html')
    }
}



function anoAtual() {
    return new Date().getFullYear();
}

document.getElementById("ano").innerText = anoAtual();

