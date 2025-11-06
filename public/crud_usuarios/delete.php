<?php

include '../../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM usuario WHERE id=$id ";

if ($mysqli -> query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $mysqli->error;
}
$mysqli -> close();
exit();