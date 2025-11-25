<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $assunto  = $_POST['assunto'];
    $descricao = $_POST['descricao'];
    $estado = $_POST['estado'];
    $horario  = $_POST['horario'];
    $data  = $_POST['data'];
    $prioridade  = $_POST['prioridade'];
    
    $sql = "INSERT INTO notificacao (descricao, estado, horario, data_notificacao, prioridade) VALUES ('$descricao', '$estado', '$horario', '$data', '$prioridade')";

    if ($mysqli->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
}

?>
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
        <form id="escreverNotificacao_form" class="relatarContainer" method="POST">

            <label for="assunto" class="relatarLabel">Assunto:</label>
            <input type="text" id="assunto" name="assunto" class="relatarInput"required>

            <label for="descricao" class="relatarLabel">Descrição:</label>
            <textarea id="descricao" name="descricao" class="relatarInput" required></textarea>

            <label for="estado" class="relatarLabel">Estado:</label>
            <select id="estado" name="estado"  class="relatarInput" required >
                <option value="nulo">...</option>
                <option value="a fazer">A fazer</option>
                <option value="fazendo">Fazendo</option>
                <option value="feito">Feito</option>
            </select>

            <label for="horario" class="relatarLabel">Horário:</label>
            <input type="time" id="horario" name="horario" class="relatarInput" required>

            <label for="data" class="relatarLabel">Data da Notificação:</label>
            <input type="date" id="data" name="data"  class="relatarInput" required>

            <label for="prioridade" class="relatarLabel">Prioridade:</label>
            <select id="prioridade" name="prioridade"  class="relatarInput"required>
                <option value="nulo">...</option>
                <option value="baixa">Baixa</option>
                <option value="média">Média</option>
                <option value="alta">Alta</option>
            </select>
            <br>
            <button type="submit">Salvar Notificação</button>
        </form>
        </main>
    
</body>

</html>