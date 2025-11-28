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
    <main>
        <form  method="post" >
            <?php
            include '../db.php';
            session_start();
            $idUser =  $_SESSION['id_usuario'];

            $sql = "SELECT * FROM usuario WHERE id_usuario =  $idUser";

            $result = $mysqli->query($sql);
            $row = $result->fetch_assoc();

          
            echo "
            <img class='PerfilIcon' src='../assets/foto_perfil/{$row['foto_perfil']}' alt=''>
            <div id='form'>
                <div  class='formCadastro'>

                   

                    <div class='inpput'>
                        <p class='relatarInput'> Email: {$row['email_usuario']}</p>
                    </div>
                    <br>
        
                    <div class='inpput'>
                        <p class='relatarInput'> Senha: {$row['senha_usuario']}</p>
                    </div>
                    <br>
        
                    <div class='inpput'>
                        <p class='relatarInput'> Telefone: {$row['telefone_usuario']}</p>
                    </div>
                    <br>
        
                    <div class='inpput'>
                        <p class='relatarInput'> Cargo: {$row['cargo_usuario']}</p>
                    </div>
                    <br>
        
                    <div class='inpput'>
                        <p class='relatarInput'> Data de Nascimento: {$row['nascimento_usuario']}</p>
                    </div>
                    <br>
                    
                    <div class='inpput'>
                        <p class='relatarInput'> Nome: {$row['nome_usuario']}</p>
                    </div>
                    <br>
                    <br>
                    
            
                </div>
            </div>
            ";
            ?>
            <div class="relatarButton">
                <button type="submit" class="botaoRelatar"> Atualizar</button>
            </div>
            </div>
        </form>
    </main>
</body>

</html>