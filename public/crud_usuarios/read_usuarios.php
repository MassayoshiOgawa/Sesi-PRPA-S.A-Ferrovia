<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
</head>

<body>
    <header style="background-color: rgba(255, 0, 0, 0);">
        <a href="../homepage.php">
            <img src="../../assets/voltarICON.png" alt="" class="voltarICON">
        </a>
    </header>

    <main>
        <?php
        include '../../db.php';

        $sql = "SELECT * FROM usuario";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {

            echo "<table border='1'>
                    <tr>
                        <th>id_usuario</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cargo</th>
                        <th>Nascimento</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {

                // PEGA O CEP DO BANCO
                $cep = $row['cep_usuario'] ?? '';

                if (!empty($cep)) {
                    $cep_limpo = preg_replace('/\D/', '', $cep);

                    $api_url = "https://brasilapi.com.br/api/cep/v1/" . $cep_limpo;

                    $ch = curl_init($api_url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);

                    $endereco = json_decode($response, true);

                    $logradouro = $endereco['street'] ?? '---';
                    $bairro     = $endereco['neighborhood'] ?? '---';
                    $cidade     = $endereco['city'] ?? '---';
                    $estado     = $endereco['state'] ?? '---';
                } else {
                    $logradouro = $bairro = $cidade = $estado = '---';
                }

                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nome_usuario']}</td>
                        <td>{$row['email_usuario']}</td>
                        <td>{$row['telefone_usuario']}</td>
                        <td>{$row['cargo_usuario']}</td>
                        <td>{$row['nascimento_usuario']}</td>
                        
                        
                        <td>$cep</td>

                        <td>
                            $logradouro <br>
                            $bairro <br>
                            $cidade - $estado
                        </td>

                        <td>
                            <a href='update_usuarios.php?id={$row['id']}'>Editar</a>
                            <a href='delete_usuarios.php?id={$row['id']}'>Excluir</a>
                        </td>
                    </tr>";
            }

            echo "</table>";

        } else {
            echo "Nenhum registro encontrado.";
        }

        $mysqli->close();

        echo "<br><br><a href='cadastro_usuarios.php'>Inserir novo registro</a>";
        ?>
    </main>
</body>

</html>
