function print(msg) {
    console.log(msg)
}

function relatar() {
    window.location.replace("../public/escreverNotificacao.php")
}

function voltar(n) {
    if (n == 1) {
        window.location.replace("../public/notificacoes.php")
    } else {
        window.location.replace("../public/homepage.php")
    }
}
