<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21333454_kaue"; // usuário do MySQL
$pass = "Kaueevinisius12#"; // senha do MySQL
$dbname = "id21333454_crud"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
