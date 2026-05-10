function anoAtual() {
    return new Date().getFullYear();
}

document.getElementById("ano").innerText = anoAtual();

