<?php
include '../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $name = $_POST['nome'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['Cargo'];

    $email = $_POST['Email'];

$checkEmail = "SELECT * FROM usuario WHERE email_usuario = '$email'";
$resultEmail = $mysqli->query($checkEmail);

if ($resultEmail->num_rows > 0) {
    die("Erro: Este e-mail já está cadastrado.");
}



    $sql = " INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, telefone_usuario, cargo_usuario, nascimento_usuario) VALUES ('$name','$email','$senha','$celular','$cargo','$nascimento')";

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
    <script src="../../scripts/cadastro.js" defer></script>
    <link rel="stylesheet" href="../../style/style.css">
    <title>Cadastro</title>

    <script>
        async function buscarEndereco() {
            const cep = document.getElementById('cep').value.replace(/\D/g, '');
            if (cep.length !== 8) {
                alert("Digite um CEP válido (8 dígitos).");
                return;
            }
            try {
                const res = await fetch(`https://brasilapi.com.br/api/cep/v1/${cep}`);
                if (!res.ok) throw new Error("CEP não encontrado");
                const data = await res.json();
                document.getElementById('rua').value = data.street || '';
                document.getElementById('bairro').value = data.neighborhood || '';
                document.getElementById('cidade').value = data.city || '';
                document.getElementById('estado').value = data.state || '';
            } catch (err) {
                alert("Erro ao buscar CEP: " + err.message);
            }
        }

        async function buscarDDD() {
            const ddd = document.getElementById('ddd').value.replace(/\D/g, '');
            if (ddd.length < 2) return;
            try {
                const res = await fetch(`https://brasilapi.com.br/api/ddd/v1/${ddd}`);
                if (!res.ok) throw new Error("DDD não encontrado");
                const data = await res.json();
                document.getElementById('estado_ddd').value = data.state;
            } catch (err) {
                alert("Erro ao buscar DDD: " + err.message);
            }
        }
    </script>

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

                <div class="inpput">
                    <label for="nome">CEP:</label><br>
                    <input type="number" id="cep" name="cep" class="inputTag" required onblur="buscarEndereco()">

                    <hr>
                </div>
                <br>

                <div class="inpput">
    <label for="rua">Rua:</label><br>
    <input type="text" id="rua" name="rua" class="inputTag" readonly>
    <hr>
</div>

<br>

<div class="inpput">
    <label for="bairro">Bairro:</label><br>
    <input type="text" id="bairro" name="bairro" class="inputTag" readonly>
    <hr>
</div>

<br>


<div class="inpput">
    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" class="inputTag" readonly>
    <hr>
</div>

<br>


<div class="inpput">
    <label for="estado">Estado:</label><br>
    <input type="text" id="estado" name="estado" class="inputTag" readonly>
    <hr>
</div>

<br>


                <button type="submit" id="cadastroButton" class="cadastroButton">Cadastrar</button>

            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>