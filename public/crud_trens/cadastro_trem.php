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

    $sql = "INSERT INTO trem (modelo, capacidade_carga, empresa_proprietaria, status_trem, consumo_combustivel, ano_trem, fk_maquinista) VALUES ('$modelo', '$capacidadeCarga', '$empresaProprietaria', '$statusTrem', '$consumoCombustivel', '$anoTrem', '$maquinista')";

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
                    <input type="number" id="capacidade_carga" name="capacidade_carga" class="inputTag" required>
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
                    <select name="maquinista" id="maquinista" class="inputTag"  required>
                        <option value="1">...</option>
                        <?php
                            include '../../db.php';
                            $sql = "SELECT id_usuario , nome_usuario FROM usuario WHERE  cargo_usuario = 'Maquinista'";

                            $result = $mysqli->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                echo"<option value='{$row['id_usuario']}'>{$row['nome_usuario']}</option>";
                            }
                        ?>
                    </select>
                    <hr>
                </div><br>

                <button type="submit" class="cadastroButton">Cadastrar</button>
                
                
            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>