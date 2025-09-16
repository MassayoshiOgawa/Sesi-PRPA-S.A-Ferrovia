<?php
$mysqli = new mysqli("localhost", "root", "root", "ferrovia_GitTrensSeg");
if ($mysqli->connect_errno) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

session_start();