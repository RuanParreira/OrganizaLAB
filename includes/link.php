<?php
// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $dbname = "organizalab";

$servidor = "sql101.infinityfree.com";
$usuario = "if0_38721638";
$senha = "nyhpzWIPbdeQ5DG";
$dbname = "if0_38721638_organizalab";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão" . $conn->connect_error);
}
