<?php
include("link.php");

$_usuario = $_POST["usuario"];
$_email = $_POST["email"];
$_senha = $_POST["senha"];

// Verifica se o e-mail já existe no banco de dados
$query = $conn->prepare("SELECT email FROM usuarios WHERE email = ?");
$query->bind_param("s", $_email);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    echo "email já cadastrado";
    exit();
}

$query->close();

// Verifica se o usuário já existe no banco de dados
$query = $conn->prepare("SELECT usuario FROM usuarios WHERE usuario = ?");
$query->bind_param("s", $_usuario);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    echo "esse usuário já existe";
    exit();
}

$query->close();

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_usuario, $_email, $_senha);

if ($stmt->execute()) {
    header("Location: ../pages/home.php");
} else {
    header("Location: ../pages/register.php");
}

$stmt->close();
$conn->close();
