function enviarCadastro() {
    const form = document.getElementById("formCadastro");
    const nome = form.Nome.value.trim();
    const senha = form.Senha.value.trim();
    const Csenha = form.CSenha.value.trim();
    const email = form.Email.value.trim();
    const celular = form.Celular.value.trim();
    
    function possuiCaracteresInvalidos(texto, campo) {
        const nomeRegex = /[1234567890'"()*;]/
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const regex = /['"()*;]/; 

        if (campo == "nome") {
            return nomeRegex.test(texto)
        }

        if (campo == "email") {
            return emailRegex.test(texto)
        }

        return regex.test(texto);
        
    }

    if (nome == "" || senha == "" || Csenha == "" || email == "" || celular == "") {
        alert("Preencha todos os campos");
        return;
    }

    if (possuiCaracteresInvalidos(nome, "nome")) {
        alert("O campo Nome contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(senha, "senha")) {
        alert("O campo Senha contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(Csenha, "csenha")) {
        alert("O campo Confirmar Senha contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(email, "email")) {
        alert("O campo Email contém caracteres inválidos!");
        return;
    }
    if (possuiCaracteresInvalidos(celular, "celular")) {
        alert("O campo Celular contém caracteres inválidos!");
        return;
    }

    if (senha.length < 8) {
        alert("Senha precisa de 8 caracteres");
        return;
    }

    if (senha !== Csenha) {
        alert("As senhas precisam ser iguais");
        return;
    }

    if (celular.length !== 11) {
        alert("Insira um número de telefone válido.");
        return;
    }


    alert("Dados Salvos!");
    window.location.replace("../index.html");
}


function voltarLogin() {
    window.location.replace("../index.html")
}