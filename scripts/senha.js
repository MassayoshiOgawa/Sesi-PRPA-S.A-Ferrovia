function enviarEmail() {
    const form = document.getElementById("SenhaForm");
    const email = form.REmail.value.trim();

    function possuiCaracteresInvalidos(texto) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(texto);
        

    }

    if (email == "") {
        alert("Campo obrigatório");
        return;
    }

    if (!possuiCaracteresInvalidos(email)) {
        alert("Email inválido!");
        return;
    }


    alert("Verifique seu email para mudar sua senha");
}

function irLogin() {
    window.location.replace("../index.html");
}
