function enviarCadastro() {
    const form = document.getElementById("formCadastro");
    const nome = form.inNome.value.trim();
    const senha = form.inSenha.value.trim();
    const Csenha = form.inCSenha.value.trim();
    const email = form.inEmail.value.trim();
    const celular = form.inCelular.value.trim();
    
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