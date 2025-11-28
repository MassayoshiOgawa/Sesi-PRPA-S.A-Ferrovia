<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $assunto  = $_POST['assunto'];
    $descricao = $_POST['descricao'];
    $estado = $_POST['estado'];
    $horario  = $_POST['horario'];
    $data  = $_POST['data'];
    $prioridade  = $_POST['prioridade'];

    $sql = "INSERT INTO notificacao (assunto, descricao, estado, horario, data_notificacao, prioridade) VALUES ('$assunto','$descricao', '$estado', '$horario', '$data', '$prioridade')";

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



        <div id="form">
            <form id="formCadastro" class="center" method="post">

                <div class="inpput">
                    <label for="assunto" class="relatarLabel">Assunto:</label><br>
                    <input type="text" id="assunto" name="assunto" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="descricao" class="relatarLabel">Descrição:</label><br>
                    <textarea id="descricao" name="descricao" class="inputTag" required></textarea>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="estado" class="relatarLabel">Estado:</label><br>
                    <select id="estado" name="estado" class="inputTag" required>
                        <option value="nulo">...</option>
                        <option value="a fazer">A fazer</option>
                        <option value="fazendo">Fazendo</option>
                        <option value="feito">Feito</option>
                    </select>
                    <hr>
                </div><br>


                <div class="inpput">
                    <label for="horario" class="relatarLabel">Horário:</label><br>
                    <input type="time" id="horario" name="horario" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="data" class="relatarLabel">Data da Notificação:</label><br>
                    <input type="date" id="data" name="data" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="prioridade" class="relatarLabel">Prioridade:</label><br>
                    <select id="prioridade" name="prioridade" class="inputTag" required>
                        <option value="nulo">...</option>
                        <option value="baixa">Baixa</option>
                        <option value="média">Média</option>
                        <option value="alta">Alta</option>
                    </select>
                    <hr>
                </div><br>
                <br>
                <button type="submit" class="cadastroButton"><h4>Salvar Notificação</h4></button>

        </div>
        </form>

        </div>
    </main>

</body>

</html>