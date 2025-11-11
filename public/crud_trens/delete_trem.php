<?php

include '../../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM trem WHERE id=$id ";

if ($mysqli -> query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='trens.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $mysqli->error;
}
$mysqli -> close();
exit();