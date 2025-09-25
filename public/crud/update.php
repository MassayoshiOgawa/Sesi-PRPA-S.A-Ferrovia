<?php

include '../../db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['name'];
    $nacionalidade = $_POST['nacionalidade'];
    $nascimnto = $_POST['nascimento'];

    $sql = "UPDATE autores SET nome_autor ='$nome',nacionalidade_autor ='$nacionalidade',ano_nascimento_autor = '$nascimnto' WHERE id=$id";

    if ($mysqli->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read_autores.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
    exit(); 
}

$sql = "SELECT * FROM usuario WHERE id=$id";
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update_autores.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" required>

        <label for="nacionalidade">nacionalidade:</label>
        <input type="text" name="nacionalidade" value="<?php echo $row['nacionalidade'];?>" required>

         <label for="nascimento">Ano de nascimento:</label>
        <input type="number" name="nascimento" value="<?php echo $row['nascimento'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read_autores.php">Ver registros.</a>

</body>

</html>