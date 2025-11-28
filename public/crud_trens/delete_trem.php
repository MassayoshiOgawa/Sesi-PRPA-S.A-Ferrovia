<?php

include '../../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM trem WHERE id_trem = $id ";

if ($mysqli -> query($sql) === true) {
    header("location: trens.php");
} else {
    echo "Erro " . $sql . '<br>' . $mysqli->error;
}
$mysqli -> close();
exit();