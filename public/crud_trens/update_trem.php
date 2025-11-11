<?php
include '../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $desempenho = $_POST['desempenho'];
    $consumo = $_POST['consumo'];
    $eficiencia = $_POST['eficiencia'];
    $maquinista = $_POST['maquinista'];

    
    $sql = "UPDATE trem SET desempenho = '$desempenho', consumo_energia = '$consumo', eficiencia = '$eficiencia', fk_maquinista = '$maquinista' WHERE id_trem = '$id'";


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
                    <label for="desempenho">Desempenho:</label><br>
                    <input type="number" id="desempenho" name="desempenho" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="consumo">Consumo de energia:</label><br>
                    <input type="number" id="consumo" name="consumo" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="eficiencia">Eficiencia:</label><br>
                    <input type="number" id="eficiencia" name="eficiencia" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="maquinista">Maquinista:</label><br>
                    <input type="number" id="maquinista" name="maquinista" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <button type="submit" id="cadastroButton">Cadastrar</button>

            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>