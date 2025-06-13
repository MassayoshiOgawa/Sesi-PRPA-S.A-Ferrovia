function enviarCadastro() {
    const form = document.getElementById("formCadastro");
    const nome = form.Nome.value.trim();
    const senha = form.Senha.value.trim();
    const Csenha = form.CSenha.value.trim();
    const email = form.Email.value.trim();
    const celular = form.Celular.value.trim();

    if (nome == "") {
        alert("Preencha todos os campos");
        return;
    }
    if (senha == "") {
        alert("Preencha todos os campos");
        return;
    }
    if (Csenha == "") {
        alert("Preencha todos os campos");
        return;
    }
    if (email == "") {
        alert("Preencha todos os campos");
        return;
    }
    if (celular == "") {
        alert("Preencha todos os campos");
        return;
    }


    if (senha.length !== 8) {
        alert("Senha precisa de 8 caracteres")
        return;
    }

    if (senha !== Csenha) {
        alert("As senhas precisam ser iguais")
        return;
    }

    alert("Dados Salvos!");

    window.location.replace("../public/index.html")
}