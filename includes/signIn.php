<?php
include("conexao.php");
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

//Lembrese de mim
$rememberMe = isset($_POST['remember_me']);

$stmt = $conn->prepare("SELECT email, id_usuario FROM usuarios WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['user_id'] = $user['id_usuario'];

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
