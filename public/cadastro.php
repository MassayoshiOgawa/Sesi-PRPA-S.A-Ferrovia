<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    $name = $_POST['nome'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];
    $senha = $_POST['senha'];
    $Csenha = $_POST['CSenha'];

    if($senha == $Csenha){

        $sql = " INSERT INTO usuario ( nome_usuario, email_usuario, senha_usuario, telefone_usuario) VALUE ('$name','$email','$senha','$celular')";

        header("Location: public/homepage.php");
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/cadastro.js" defer></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <div class="cab">
            <img class="logo" src="../assets/logo.png" alt="">
        </div>

        <div id="form">
            <form id="formCadastro" class="center">
                <div class="inpput">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="Nome" name="nome" class="inputTag" required>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="Celular">Celular:</label><br>
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
                    <label for="CSenha">Confirmar Senha:</label><br>
                    <input type="password" id="CSenha" name="CSenha" class="inputTag" required>
                    <hr>
                </div>
                <br>



                <button type="submit"  id="cadastroButton">Cadastrar</button>
                

            </form>
        </div>
      

    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>