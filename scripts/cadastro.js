function enviarCadastro() {
    const form = document.getElementById("loginForm");
    const nome = form.inNome.value.trim();
    const senha = form.inSenha.value.trim();
    const cadastro = form.inCadastro.value;


    if (nome == "") {
        alert("Nome é obrigatório");
        return;
    } else if (senha == "") {
        alert("Senha é obrigatório");
        return;
    } else if (cadastro == "") {
        alert("Cadastro é obrigatório");
        return;
    }

    if (senha.length !== 8) {
        alert("Senha precisa de 8 caracteres")
        return;
    }

    console.log(nome);
    console.log(senha);
    console.log(cadastro);
}