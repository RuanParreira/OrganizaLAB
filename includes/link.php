<?php
$env = parse_ini_file(__DIR__ . '/../.env');

$servidor = $env['DB_SERVER'];
$usuario = $env['DB_USER'];
$senha = $env['DB_PASSWORD'];
$dbname = $env['DB_NAME'];


$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão" . $conn->connect_error);
}
