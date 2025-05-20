function relatar() {
    window.location.replace("../public/escreverNotificacao.html")
}

const aux = document.getElementById("mainNoticia")
const container = document.getElementById("containerNotificacoes")
const noticia = aux
aux.remove()

for (let i = 0; i<2; i++) {
    container.appendChild(noticia)
    console.log(i)
}