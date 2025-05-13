function print(msg) {
    console.log(msg);
}


/* Dois vetores que armazenam os usuarios e as senhas de forma respectiva */
const usuarios = ["adm", "Leandro Massayoshi Ogawa", "Pedro Henrique Monteiro Oliveira"]
const senhas = ["adm", "abacaxi123", "javascript123"]


function enviarform() {
    const frm = document.getElementById("loginForm")
    const nome = frm.inNome.value.trim();
    const senha = frm.inSenha.value.trim();
    const cadastro = parseInt(frm.inCadastro.value)

    if (nome.toLowerCase() !== "adm") {
        if (nome !== usuarios[cadastro]) {
            alert("Usuário não encontrado.");
            return;
        } else if (senha !== senhas[cadastro]) {
            alert("Senha incorreta.");
            return;
        } else {
            alert("Login efetuado com sucesso!")
            window.location.replace("../public/homepage.html")
        }
    } else {
        alert("Login efetuado com sucesso!")
        window.location.replace("../public/homepage.html")
    }
}