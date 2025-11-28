<?php

include '../../db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuario where id_usuario=$id";

$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['cargo'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua']; 
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "UPDATE usuario SET nome_usuario = '$name', email_usuario =' $email', senha_usuario = '$senha' , telefone_usuario = '$celular' , cargo_usuario = '$cargo', nascimento_usuario = '$nascimento', cep_usuario = '$cep', rua_usuario = '$rua', bairro_usuario = '$bairro',cidade_usuario = '$cidade',estado_usuario = '$estado' WHERE id_usuario=$id";

    if ($mysqli->query($sql) === true) {
        header("location: read_usuarios.php");
    } else {
        echo "Erro " . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
    exit();
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <input type="text"  name="nome" class="inputTag" required VALUE="<?php echo "{$row['nome_usuario']}" ?>"> 
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="celular">Telefone:</label><br>
                    <input type="number" id="celular" name="celular" class="inputTag" required VALUE="<?php echo "{$row['telefone_usuario']}" ?>">
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" class="inputTag" required VALUE="<?php echo "{$row['email_usuario']}" ?>">
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="senha">Senha:</label><br>
                    <input type="password"  name="senha" class="inputTag" required VALUE="<?php echo "{$row['senha_usuario']}" ?>">
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="nascimento"> Data de nascimento:</label><br>
                    <input type="date" id="nascimento" name="nascimento" class="inputTag" required VALUE="<?php echo "{$row['nascimento_usuario']}" ?>">
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="cargo">Cargo:</label><br>
                    <select name="cargo" class="inputTag" VALUE="<?php echo "{$row['cargo_usuario']}" ?>">
                        
                        <option value="Administrador">Administrador</option>
                        <option value="Maquinista">Maquinista</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="nome">CEP:</label><br>
                    <input type="number" id="cep" name="cep" class="inputTag" required onblur="buscarEndereco()" VALUE="<?php echo "{$row['cep_usuario']}" ?>" >

                    <hr>
                </div>
                <br>

                <div class="inpput">
                    <label for="rua">Rua:</label><br>
                    <input type="text" id="rua" name="rua" class="inputTag" readonly VALUE="<?php echo "{$row['rua_usuario']}" ?>"> 
                    <hr>
                </div>

                <br>

                <div class="inpput">
                    <label for="bairro">Bairro:</label><br>
                    <input type="text" id="bairro" name="bairro" class="inputTag" readonly VALUE="<?php echo "{$row['bairro_usuario']}" ?>">
                    <hr>
                </div>

                <br>


                <div class="inpput">
                    <label for="cidade">Cidade:</label><br>
                    <input type="text" id="cidade" name="cidade" class="inputTag" readonly VALUE="<?php echo "{$row['cidade_usuario']}" ?>">
                    <hr>
                </div>

                <br>


                <div class="inpput">
                    <label for="estado">Estado:</label><br>
                    <input type="text" id="estado" name="estado" class="inputTag" readonly VALUE="<?php echo "{$row['estado_usuario']}" ?>">
                    <hr>
                </div>


                <button type="submit" id="cadastroButton" class="cadastroButton">Atualizar</button>

            </form>
        </div>


    </main>
    <footer>
        <p>Todos os direitos reservados a equipe GitTrens ©</p>
    </footer>
</body>

</html>