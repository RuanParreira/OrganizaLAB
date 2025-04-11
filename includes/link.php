<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "organizalab";

// $servidor = "localhost";
// $usuario = "u637029734_admin";
// $senha = "N^tX$;6Ad";
// $dbname = "u637029734_organizalab";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão" . $conn->connect_error);
}
