<?php

include '../../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM usuario WHERE id_usuario=$id ";

if ($mysqli -> query($sql) === true) {
    header("location: read_usuarios.php");
} else {
    echo "Erro " . $sql . '<br>' . $mysqli->error;
}
$mysqli -> close();
exit();