<?php
include '../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $modelo              = $_POST['modelo'];
    $capacidadeCarga    = $_POST['capacidade_carga'];
    $empresaProprietaria = $_POST['empresa_proprietaria'];
    $statusTrem         = $_POST['status_trem'];
    $consumoCombustivel = $_POST['consumo_combustivel'];
    $anoTrem            = $_POST['ano_trem'];
    $maquinista          = $_POST['maquinista'];


    $sql = "UPDATE trem SET modelo='$modelo',capacidade_carga='$capacidadeCarga', empresa_proprietaria='$empresaProprietaria', status_trem='$statusTrem',  consumo_combustível='$consumoCombustivel', ano_trem='$anoTrem', fk_maquinista='$maquinista' WHERE id_trem='$id'";


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
                    <label for="modelo">Modelo:</label><br>
                    <input type="text" id="modelo" name="modelo" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="capacidade_carga">Capacidade de Carga (toneladas):</label><br>
                    <input type="number" step="0.01" id="capacidade_carga" name="capacidade_carga" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="empresa_proprietaria">Empresa Proprietária:</label><br>
                    <input type="text" id="empresa_proprietaria" name="empresa_proprietaria" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="status_trem">Status do Trem:</label><br>
                    <select id="status_trem" name="status_trem" class="inputTag" required>
                        <option value="ativo">Ativo</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="manutenção">Manutenção</option>
                    </select>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="consumo_combustivel">Consumo de Combustível:</label><br>
                    <input type="text" id="consumo_combustivel" name="consumo_combustivel" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="ano_trem">Ano do Trem:</label><br>
                    <input type="number" id="ano_trem" name="ano_trem" class="inputTag" required>
                    <hr>
                </div><br>

                <div class="inpput">
                    <label for="maquinista">ID do Maquinista:</label><br>
                    <input type="number" id="maquinista" name="maquinista" class="inputTag" required>
                    <hr>
                </div><br>


                <button type="submit" id="cadastroButton">Cadastrar</button>

            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>