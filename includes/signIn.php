<?php
include("link.php");
session_start();

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Busca apenas o hash da senha
$stmt = $conn->prepare("SELECT id_user, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['id_user'] = $user['id_user'];

        header("Location: ../pages/home.php");
        exit();
    }
}

// Se falhar
$_SESSION['resposta'] = "Usuário ou senha inválidos.";
header("Location: ../pages/signIn.php");
exit();

$stmt->close();
$conn->close();
