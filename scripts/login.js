function print(msg) {
    console.log(msg);
}

function enviarform() {
    const form = document.getElementById("loginForm");
    const nome = form.inNome.value.trim();
    const senha = form.inSenha.value.trim();
    const cadastro = form.inCadastro.value;

    if (nome == "") {
        alert("Preencha todos os campos");
        return;
    } else if (senha == "") {
        alert("Preencha todos os campos");
        return;
    } else if (cadastro == "") {
        alert("Preencha todos os campos");
        return;
    }

    if (senha.length >= 8) {
        alert("Senha precisa de 8 caracteres")
        return;
    }

    console.log(nome);
    console.log(senha);
    console.log(cadastro);
    window.location.replace("public/homepage.html")
}

function abrirCadastro(){
    window.location.replace("public/cadastro.html")
}
