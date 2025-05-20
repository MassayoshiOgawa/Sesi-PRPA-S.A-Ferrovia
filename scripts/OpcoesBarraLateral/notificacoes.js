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

const aux = document.getElementById("mainNoticia");
const container = document.getElementById("containerNotificacoes");
const noticiaOriginal = aux.cloneNode(true);

for (var i = 0; i < 99; i++) {
    if (localStorage.getItem(`notiTrem${i}`)) {
        const clone = noticiaOriginal.cloneNode(true);
        clone.getElementById("noti_nome").textContent = localStorage.getItem(`notiTrem${i}_nome`)
        clone.getElementById("noti_desc").textContent = localStorage.getItem(`notiTrem${i}_desc`)
        clone.getElementById("noti_estado").textContent = localStorage.getItem(`notiTrem${i}_estado`)
        clone.getElementById("noti_grau").textContent = localStorage.getItem(`notiTrem${i}_grau`)
        clone.getElementById("noti_horario").textContent = localStorage.getItem(`notiTrem${i}_horario`)
        container.appendChild(clone);
    } else {
        break
    }
}
