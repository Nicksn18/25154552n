<?php
$host = "localhost";
$user = "root";       // Usuário do MySQL
$pass = "";           // Senha do MySQL
$db   = "extintores_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
