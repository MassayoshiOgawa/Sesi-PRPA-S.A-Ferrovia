<!DOCTYPE html>
<html lang="pt-br">
<script src="../scripts/OpcoesBarraLateral/perfil.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
</head>

<body>
    <header style="background-color: rgba(250, 235, 215, 0);">
        <img class="voltarICON" src="../assets/setaICON.png" alt="" onclick="voltar()">
    </header>


    <img class="PerfilIcon" src="../assets/userICON.png" alt="">
     <form id="escreverNotificacao_form" class="relatarContainer">
            <label class="relatarLabel">Nome:</label>
            <input type="text" id="inNome" class="relatarInput" required>
            <label class="relatarLabel">Telefone:</label>
            <input type="text" id="inDesc" class="relatarInput" required>
            <label class="relatarLabel">Email:</label>
            <input type="text" id="inGrau" class="relatarInput" required>
            <label class="relatarLabel">Data de Nascimento:</label>
            <input type="text" id="inHorario" class="relatarInput" required>
           <br>
            <button type= "submit" class=" botaoEnviarPerfil" > Enviar</button>
        </form>

</body>

</html>