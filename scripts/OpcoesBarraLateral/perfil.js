document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('escreverNotificacao_form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); 

        const nome = document.getElementById('inNome').value.trim();
        const telefone = document.getElementById('inDesc').value.trim();
        const email = document.getElementById('inGrau').value.trim();
        const nascimento = document.getElementById('inHorario').value.trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const telefoneRegex = /^[0-9()\s\-+]+$/;

        if (nome === '' || telefone === '' || email === '' || nascimento === '') {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        if (!emailRegex.test(email)) {
            alert("Por favor, insira um e-mail válido.");
            return;
        }

        if (!telefoneRegex.test(telefone)) {
            alert("Por favor, insira um telefone válido.");
            return;
        }

        
        alert("Dados Salvos!");
       
    });
});

function voltar(){
    window.location.replace("../public/homepage.html")
}