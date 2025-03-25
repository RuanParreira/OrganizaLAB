<?php
include("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
$stmt->bind_param("ss", $usuario, $senha);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../pages/home.php");
} else {
    echo "Usuário ou senha inválidos.";
}

$stmt->close();
$conn->close();
