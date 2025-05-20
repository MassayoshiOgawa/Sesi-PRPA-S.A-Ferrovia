function relatar() {
    window.location.replace("../public/escreverNotificacao.html")
}

const aux = document.getElementById("mainNoticia");
const container = document.getElementById("containerNotificacoes");
const noticiaOriginal = aux.cloneNode(true);
aux.remove();

for (let i = 0; i < 2; i++) {
    const clone = noticiaOriginal.cloneNode(true);
    container.appendChild(clone);
}
