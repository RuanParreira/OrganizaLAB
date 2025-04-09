<?php
include("link.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//Lembrese de mim
$rememberMe = isset($_POST['remember_me']);

$stmt = $conn->prepare("SELECT email, id_user FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $username = $result->fetch_assoc();

    $_SESSION['id_user'] = $username['id_user'];

    if ($rememberMe) {
        setcookie("remember_me", $email, time() + (30 * 24 * 60 * 60), "/");
    } else {
        setcookie("remember_me", "", time() - 3600, "/");
    }
    header("Location: ../pages/home.php");
} else {
    $_SESSION['resposta'] = "Usuário ou senha inválidos.";
    header("Location: ../pages/signIn.php");
}

$stmt->close();
$conn->close();
