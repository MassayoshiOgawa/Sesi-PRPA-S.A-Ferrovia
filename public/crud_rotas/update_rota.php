<?php
include '../../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM rota WHERE id_rota = '$id'";

$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $nome = $_POST['nome'];
    $estacaoOrigem = $_POST['estacaoOrigem'];
    $estacaoDestino = $_POST['estacaoDestino'];
    $distancia = $_POST['distancia'];
    $intensidadeMovimento = $_POST['intensidadeMovimento'];
    $horarioFuncionamento = $_POST['horarioFuncionamento'];



    $sql = "UPDATE rota SET nome_rota = '$nome',  estacao_origem = '$estacaoOrigem' , estacao_destino = '$estacaoDestino', distancia = '$distancia', intensidade_movimento = '$intensidadeMovimento', horario_funcionamento = '$horarioFuncionamento' WHERE id_rota = '$id'";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Cadastro</title>
</head>

<body>
    <header style="background-color: rgba(255, 0, 0, 0);">
        <a href="../homepage.php">
            <img src="../../assets/voltarICON.png" alt="" class="voltarICON" onclick="voltar()">
        </a>
    </header>
    <main>

        <div id="form">
            <form id="formCadastro" class="center" method="post">

                <div class="inpput">
                    <label for="nome">Nome da rota:</label><br>
                    <input type="text"  name="nome" class="inputTag"
                        value="<?php echo $row['nome_rota']; ?>" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="estacaoOrigem">Estação de origem:</label><br>
                    <input type="text" id="estacaoOrigem" name="estacaoOrigem" class="inputTag"
                        value="<?php echo $row['estacao_origem']; ?>" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="estacaoDestino">Estação de destino:</label><br>
                    <input type="text" id="estacaoDestino" name="estacaoDestino" class="inputTag" value="<?php echo $row['estacao_destino']; ?>"required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="distancia">Distância da rota (km):</label><br>
                    <input type="number" id="distancia" name="distancia" class="inputTag" step="0.1"
                        value="<?php echo $row['distancia']; ?>" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="intensidadeMovimento">Intensidade de movimento:</label><br>
                    <input type="text" id="intensidadeMovimento" name="intensidadeMovimento" class="inputTag"
                        value="<?php echo $row['intensidade_movimento']; ?>" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="horarioFuncionamento">Horário de funcionamento:</label><br>
                    <input type="text" id="horarioFuncionamento" name="horarioFuncionamento" class="inputTag"
                        value="<?php echo $row['horario_funcionamento']; ?>" required>
                    <hr>
                </div><br>


                <button type="submit" id="cadastroButton">Atualizar</button>

            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>