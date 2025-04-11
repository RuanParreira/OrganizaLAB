<?php
include("link.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $rawPassword = trim($_POST['password']);
    $password = password_hash($rawPassword, PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Por favor, insira um e-mail válido.');
    }

    $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/';
    if (!preg_match($passwordRegex, $rawPassword)) {
        die('A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma letra minúscula e um caractere especial.');
    }

    // Verifica se o e-mail já existe
    $query = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        echo "email já cadastrado";
        exit();
    }
    $query->close();

    // Verifica se o username já existe
    $query = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        echo "esse usuário já existe";
        exit();
    }
    $query->close();

    // Insere o usuário
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Salva o ID do usuário na sessão
        $_SESSION['id_user'] = $stmt->insert_id;

        header("Location: ../pages/home.php");
        exit();
    } else {
        header("Location: ../pages/register.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
