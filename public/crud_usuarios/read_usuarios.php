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
            <img src="../../assets/voltarICON.png" alt="" class="voltarICON" onclick="voltar()">
        </a>
    </header>
    <main>
        <?php

        include '../../db.php';

        $sql = "SELECT * FROM usuario";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {

            echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Senha </th>
            <th> Telefone </th>
            <th> Cargo </th>
            <th> Nascimento </th>
            
        </tr>
         ";

            while ($row = $result->fetch_assoc()) {

                echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome_usuario']} </td>
                <td> {$row['email_usuario']} </td>
                <td> {$row['senha_usuario']} </td>
                <td> {$row['telefone_usuario']} </td>
                <td> {$row['cargo_usuario']} </td>
                <td> {$row['nascimento_usuario']} </td>
                
                <td> 
                    <a href='update.php?id={$row['id']}'>Editar<a>
                    <a href='delete.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
            }
            echo "</table>";
        } else {
            echo "Nenhum registro encontrado.";
        }

        $mysqli->close();

        echo "<a href='cadastro.php'>Inserir novo Registro</a>";
        ?>
    </main>
</body>

</html>