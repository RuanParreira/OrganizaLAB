<?php
include("conexao.php");
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica se o checkbox "Lembre-se de mim" foi marcado
$rememberMe = isset($_POST['remember_me']);

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    if ($rememberMe) {
        // Define um cookie para lembrar o e-mail do usuário por 30 dias
        setcookie("remember_me", $email, time() + (30 * 24 * 60 * 60), "/");
    } else {
        // Remove o cookie se o checkbox não estiver marcado
        setcookie("remember_me", "", time() - 3600, "/");
    }
    header("Location: ../pages/home.php");
} else {
    $_SESSION['resposta'] = "Usuário ou senha inválidos.";
    header("Location: ../pages/signIn.php");
}

$stmt->close();
$conn->close();
