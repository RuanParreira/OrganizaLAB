<?php
include("link.php");

$_username = $_POST["username"];
$_email = $_POST["email"];
$_password = $_POST["password"];

// Verifica se o e-mail já existe no banco de dados
$query = $conn->prepare("SELECT email FROM users WHERE email = ?");
$query->bind_param("s", $_email);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    echo "email já cadastrado";
    exit();
}

$query->close();

// Verifica se o usuário já existe no banco de dados
$query = $conn->prepare("SELECT username FROM users WHERE username = ?");
$query->bind_param("s", $_username);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    echo "esse usuário já existe";
    exit();
}

$query->close();

$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_username, $_email, $_password);

if ($stmt->execute()) {
    header("Location: ../pages/home.php");
} else {
    header("Location: ../pages/register.php");
}

$stmt->close();
$conn->close();
