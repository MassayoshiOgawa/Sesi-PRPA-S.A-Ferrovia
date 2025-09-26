<?php

include '../../db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['Cargo'];


    $sql = "UPDATE usuario SET id, nome_usuario = '$name', email_usuario =' $email', senha_usuario = '$senha' , telefone_usuario = '$celular' , cargo_usuario = '$cargo', nascimento_usuario = '$nascimento' WHERE id=$id";

    if ($mysqli->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read_autores.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
    exit();
}

$sql = "SELECT * FROM usuario WHERE id=$id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

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
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="Nome" name="nome" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="Celular">Telefone:</label><br>
                    <input type="number" id="Celular" name="Celular" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="Email">Email:</label><br>
                    <input type="text" id="Email" name="Email" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="senha">Senha:</label><br>
                    <input type="password" id="Senha" name="senha" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="nascimento"> Data de nascimento:</label><br>
                    <input type="date" id="nascimento" name="nascimento" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="Cargo">Cargo:</label><br>
                    <select name="Cargo" id="">
                        <option value=""></option>
                        <option value="Administrador">Administrador</option>
                        <option value="Maquinista">Maquinista</option>
                        <option value="Usuario">Usuario</option>
                    </select>
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