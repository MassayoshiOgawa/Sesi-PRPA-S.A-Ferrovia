function enviarEmail() {
    const form = document.getElementById("SenhaForm");
    const email = form.REmail.value.trim();



    if (email == "") {
        alert("Campo obrigatório");
        return;
    }

  
    alert("Verefique seu email para mudar sua senha")

}

function irLogin() {
    window.location.replace("../index.html")

}