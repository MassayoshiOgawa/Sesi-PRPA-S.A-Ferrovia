const barra = document.getElementById("barraLateral")
const tresBarraInicial = document.getElementById("tresBarrasInicial")
const tresBarraFinal = document.getElementById("tresBarrasFinal")

// doc js criado para colocar o código que faz a Barra Lateral funcionar(ficar invisivel, ficar visivel, funcionavel etc)

let estado = 1

barra.style.opacity = 0
barra.style.pointerEvents = "none"

function barFunction() {
    if (estado == 0) {
        estado = 1
        barra.style.opacity = 0
        barra.style.pointerEvents = "none"
    } else {
        estado = 0
        barra.style.opacity = 1
        barra.style.pointerEvents = "auto"
    }
}

function irParaAbaNotificacoes() {
    window.location.replace("../public/notificacoes.php")
}

function irParaAbaPerfil() {
    window.location.replace("../public/perfil.php")
}

function irParaAbaRelatorioTrens(){
    window.location.replace("../public/trens.php")
}

function irParaAbaRelatorioRotas(){
    window.location.replace("../public/rotas.php")
}

function logOut(){
    window.location.replace("../index.php")
}