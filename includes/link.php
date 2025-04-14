<?php
$env = parse_ini_file(__DIR__ . '/../.env');

// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $dbname = "organizalab";

$servidor = "localhost";
$usuario = "u637029734_Admin";
$senha = "6[q+3r;!C";
$dbname = "u637029734_organizalab";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão" . $conn->connect_error);
}
