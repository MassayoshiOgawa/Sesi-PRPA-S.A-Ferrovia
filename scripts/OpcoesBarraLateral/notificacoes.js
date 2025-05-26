function print(msg) {
    console.log(msg)
}

function relatar() {
    window.location.replace("../public/escreverNotificacao.html")
}

function voltar(n) {
    if (n == 1) {
        window.location.replace("../public/notificacoes.html")
    } else {
        window.location.replace("../public/homepage.html")
    }
}


function enviarFormulario() {
    for (var i = 0; i < 99; i++) {
        if (!localStorage.getItem(`notiTrem${i}`)) {
            localStorage.setItem(`notiTrem${i}`, i)
            const form = document.getElementById("escreverNotificacao_form")
            localStorage.setItem(`notiTrem${i}_nome`, form.inNome.value)
            localStorage.setItem(`notiTrem${i}_desc`, form.inDesc.value)
            localStorage.setItem(`notiTrem${i}_grau`, form.inGrau.value)
            localStorage.setItem(`notiTrem${i}_horario`, form.inHorario.value)
            alert("registrado")
            break
        } 
    }
}

document.getElementById

const aux = document.getElementById("mainNoticia");
const container = document.getElementById("containerNotificacoes");
const noticiaOriginal = aux.cloneNode(true);
aux.remove()

for (var i = 0; i < 99; i++) {
    if (localStorage.getItem(`notiTrem${i}`)) {
        var state = "Resolvido"
        var rand = Math.ceil((Math.random()*2))
        if (rand == 1) {
            state = "Não Resolvido"
        }
        const cloneN = noticiaOriginal.cloneNode(true);
        cloneN.querySelector("#noti_nome").textContent = localStorage.getItem(`notiTrem${i}_nome`);
        cloneN.querySelector("#noti_desc").textContent = localStorage.getItem(`notiTrem${i}_desc`);
        cloneN.querySelector("#noti_estado").textContent = localStorage.getItem(`notiTrem${i}_estado`);
        cloneN.querySelector("#noti_grau").textContent = localStorage.getItem(`notiTrem${i}_grau`);
        cloneN.querySelector("#noti_horario").textContent = localStorage.getItem(`notiTrem${i}_horario`);
        cloneN.querySelector("#noti_estado").textContent = `Estado: ${state}`
        container.appendChild(cloneN);
    } else {
        break;
    }
}
