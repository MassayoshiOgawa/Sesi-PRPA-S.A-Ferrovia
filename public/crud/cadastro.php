<?php
include '../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $name = $_POST['nome'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['Cargo'];



    $sql = " INSERT INTO usuario (id, nome_usuario, email_usuario, senha_usuario, telefone_usuario, cargo_usuario, nascimento_usuario) VALUES (DEFAULT, '$name','$email','$senha','$celular','$cargo','$nascimento')";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../scripts/cadastro.js" defer></script>
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