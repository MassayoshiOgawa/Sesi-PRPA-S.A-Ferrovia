<?php
// perfil.php
$nome = $_POST['nome'] ?? '';
$cep = $_POST['cep'] ?? '';
$rua = $_POST['rua'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$ddd = $_POST['ddd'] ?? '';
$estado_ddd = $_POST['estado_ddd'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<script src="../scripts/OpcoesBarraLateral/perfil.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
</head>

<body>
    <header style="background-color: rgba(250, 235, 215, 0);">
        <img class="voltarICON" src="../assets/setaICON.png" alt="" onclick="voltar()">
    </header>
    <?php 
        include '../db.php';

        $sql = "SELECT * FROM usuario";

        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();

        echo"
        <img class='PerfilIcon' src='../assets/userICON.png' alt=''>
        <div  class='relatarContainer'>
        
            <p class='relatarInput'> Email: {$row['email_usuario']}</p><br>
            <p class='relatarInput'> Senha: {$row['senha_usuario']}</p><br>
            <p class='relatarInput'> Telefone: {$row['telefone_usuario']}</p><br>
            <p class='relatarInput'> Cargo: {$row['cargo_usuario']}</p><br>
            <p class='relatarInput'> Data de Nascimento: {$row['nascimento_usuario']}</p><br>
            <p class='relatarInput'> Nome: {$row['nome_usuario']}</p><br>
            <br>
            <button type= 'submit' class='botaoEnviarPerfil' > Enviar</button>
    
        </div>
        ";

    ?>
</body>

</html>