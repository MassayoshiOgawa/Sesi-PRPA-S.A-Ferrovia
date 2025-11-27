<?php

$servername = "localhost";
$username = "root";
$password = ""; // <-- DEIXA VAZIO PFV
$dbname = "ferrovia_gittrens";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Conexao falhou: " . $mysqli->connect_error);
}
