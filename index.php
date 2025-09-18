<?php
// 1) Conexão
include 'db.php';

// 2) Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// 3) Login
$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $senha = $_POST["senha"] ?? "";
    $cadastro = $_POST["cadastro"] ?? "";

    $stmt = $mysqli->prepare("SELECT id, nome_usuario, senha_usuario FROM usuario WHERE nome_usuario=? AND senha_usuario=?");
    $stmt->bind_param("ss", $nome, $senha);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();
    $stmt->close();

    if ($dados) {
        $_SESSION["id"] = $dados["id"];
        $_SESSION["nome"] = $dados["nome_usuario"];
        header("Location: public/homepage.php");
        exit;
    } else {
        $msg = "Usuário ou senha incorretos!";
        
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts/login.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body>
    <main>
        <div class="cab">
            <img class="logo" src="assets/logo.png" alt="">
        </div>

        <div id="form">
            <form id="loginForm" class="center" method="POST">
                <div class="inpput">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="inNome" name="nome" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="senha">Senha:</label><br>
                    <input type="password" id="inSenha" name="senha" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="cadastro">Nº Cadastro:</label><br>
                    <input type="number" id="inCadastro" name="cadastro" class="inputTag" required>
                    <hr>
                </div>
                <br>
                <a href="public/senha.html">Esqueceu sua senha?</a>
                <br>
                <div class="flex" style="flex-direction: column;">
                    <button type="submit"  class="cadastroButton">Enviar</button>

                    <button type="button" onclick="abrirCadastro()" class="cadastroButton">Cadastro</button>
                </div>
            </form>
        </div>



    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>
