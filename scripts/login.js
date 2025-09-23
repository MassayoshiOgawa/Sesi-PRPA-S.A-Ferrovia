function print(msg) {
    console.log(msg);
}

/* Dois vetores que armazenam os usuarios e as senhas de forma respectiva */
const usuarios = ["adm", "Leandro Massayoshi Ogawa", "Pedro Henrique Monteiro Oliveira", "Enzo Souza"]
const senhas = ["adm", "abacaxi123", "javascript123", "porco321"]
// Função para validar caracteres proibidos
function possuiCaracteresInvalidos(texto, campo) {
        const nomeRegex = /[1234567890'"()*;]/
        const regex = /['"()*;]/; 

        if (campo == "nome") {
            return nomeRegex.test(texto)
        }

        return regex.test(texto);
}

function enviarform() {
    const frm = document.getElementById("loginForm");
    const nome = frm.inNome.value.trim();
    const senha = frm.inSenha.value.trim();
    const cadastro = parseInt(frm.inCadastro.value);

    // Valida os campos nome e senha para caracteres inválidos
    if (possuiCaracteresInvalidos(nome, "nome")) {
        alert("O campo Nome contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(senha, "senha")) {
        alert("O campo Senha contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(cadastro, "cadastro")) {
        alert("O campo Senha contém caracteres inválidos!");
        return;
    }

    if (nome.toLowerCase() !== "adm") {
        if (nome !== usuarios[cadastro]) {
            alert("Usuário não encontrado.");
            return;
        } else if (senha !== senhas[cadastro]) {
            alert("Senha incorreta.");
            return;
        } else {
            alert("Login efetuado com sucesso!");
            if (!localStorage.getItem("user")) {
                localStorage.setItem("user", nome);
            }
            window.location.replace("public/homepage.html");
        }
    } else {
        alert("Login efetuado com sucesso!");
        if (!localStorage.getItem("user")) {
            localStorage.setItem("user", nome);
        }
        window.location.replace("public/homepage.html");
    }
}

function abrirCadastro() {
    window.location.replace("cadastro.php");
}
