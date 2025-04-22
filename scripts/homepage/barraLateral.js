const barra = document.getElementById("barraLateral")
const tresBarraInicial = document.getElementById("tresBarrasInicial")
const tresBarraFinal = document.getElementById("tresBarrasFinal")

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