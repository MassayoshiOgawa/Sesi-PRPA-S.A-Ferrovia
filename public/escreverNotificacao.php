
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
    <title>Relatar</title>
</head>

<body>
    <header style="background-color: rgba(255, 0, 0, 0);">
        <img src="../assets/voltarICON.png" alt="" class="voltarICON" onclick="voltar(1)">
    </header>
    <main>
        <form id="escreverNotificacao_form" class="relatarContainer">
            <label class="relatarLabel">Identificação do Trem:</label>
            <input type="text" id="inNome" class="relatarInput" required>
            <label class="relatarLabel">Descrição do Problema:</label>
            <input type="text" id="inDesc" class="relatarInput" required>
            <label class="relatarLabel">Grau de Perigo:</label>
            <input type="text" id="inGrau" class="relatarInput" required>
            <label class="relatarLabel">Horário do Ocorrido:</label>
            <input type="text" id="inHorario" class="relatarInput" required>
        </form>
    </main>
    <footer>
        <br>
        <br>
        <h1 onclick="enviarFormulario()" id="botaoRelatar">Enviar</h1>
        <br>

    </footer>
</body>

</html>