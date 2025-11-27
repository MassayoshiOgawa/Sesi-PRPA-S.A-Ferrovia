<?php
    include "db.php";
    $idUser = "indefinido";
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }

    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = $_POST["nome"] ?? "";
        $pass = $_POST["senha"] ?? "";

        $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE nome_usuario=? AND senha_usuario=?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $dados = $result->fetch_assoc();
                if($dados && password_verify($pass, $dados['senha'])){
            return $dados;
        }
        $stmt->close();

        if ($dados) {
            $_SESSION['id_usuario'] = $dados['id_usuario'];
            $_SESSION["nome_usuario"] = $dados["nome_usuario"];
            $_SESSION["senha_usuario"] = $dados["senha_usuario"];
          $_SESSION['telefone_usuario']  = $dados['telefone_usuario'];
        $_SESSION['cargo_usuario']     = $dados['cargo_usuario'];
        $_SESSION['nascimento_usuario']= $dados['nascimento_usuario'];
           header("Location:public/homepage.php");
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
                <?php if($msg !== ""):?>
                <p><?php echo $msg;?></p>
                <a href="public/senha.php">Esqueceu sua senha?</a>
                <?php else:?>
                <a href="public/senha.php">Esqueceu sua senha?</a>
                <?php endif;?>
                <br>
                <div class="flex" style="flex-direction: column;">
                    <button type="submit"  class="loginButton">Enviar</button>


                </div>
            </form>
        </div>



    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>
