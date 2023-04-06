<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "123";
$password = "123";
$dbname = "test";
$link = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($link->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}