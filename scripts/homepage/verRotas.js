let state = 1
function verRotas() {
    if (state == 1) {
        state = 2
        document.getElementById("containerVerRotas").style.height = "240px"
    } else {
        state = 1
        document.getElementById("containerVerRotas").style.height = "35px"
    }
}


let currRota = null
let currId = null
function selecionarRota(rota, id) {
    id = `rota${id}`
    if (currRota == null) {
        rota.style.backgroundColor = "#F58430"
        rota.style.borderColor = "black"
        document.getElementById(id).style.opacity = 1
        currRota = rota
        currId = id
    } else {
        if (currRota == rota) {
            rota.style.backgroundColor = "white"
            rota.style.borderColor = "white"
            document.getElementById(id).style.opacity = 0
            currId = null
            currRota = null
        } else {
            currRota.style.backgroundColor = "white"
            currRota.style.borderColor = "white"
            document.getElementById(currId).style.opacity = 0

            document.getElementById(id).style.opacity = 1
            rota.style.backgroundColor = "#F58430"
            rota.style.borderColor = "black"
            currId = id
            currRota = rota
        }
    }
}