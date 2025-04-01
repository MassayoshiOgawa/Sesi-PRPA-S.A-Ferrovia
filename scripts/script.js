function print(msg) {
    console.log(msg);
}


/* Dois vetores que armazenam os usuarios e as senhas de forma respectiva */
const usuarios = ["Leandro Massayoshi Ogawa", "Pedro Henrique Monteiro Oliveira"]
const senhas = ["abacaxi123", "javascript123"]


function enviarform() {
    const nome = document.getElementById("nome").value.trim();
    const senha = document.getElementById("senha").value.trim();
    const cadastro = parseInt(document.getElementById("cadastro").value)

    if (nome !== usuarios[cadastro]) {
        alert("Usuário não encontrado.");
        return;
    } else if (senha !== senhas[cadastro]) {
        alert("Senha incorreta.");
        return;
    } else {
        alert("Login efetuado com sucesso!")
        window.location.replace("../index.html")
    }
}