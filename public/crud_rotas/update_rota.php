<?php
include '../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $intensidade = $_POST['intensidade'];
    $horario = $_POST['horario'];
    $corRota  = $_POST['corRota '];
    
    
    $sql = "UPDATE rota SET intensidade_movimento = '$intensidade', horario_funcionamento = '$horario', cor_rota = '$corRota' WHERE id_trem = '$id'";


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
                    <label for="intensidade">Intensidade do movimento:</label><br>
                    <input type="number" id="intensidade" name="intensidade" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="horario">Horario de funcionamento:</label><br>
                    <input type="number" id="horario" name="horario" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="corRota">corRota:</label><br>
                    <input type="number" id="corRota" name="corRota" class="inputTag" required>
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