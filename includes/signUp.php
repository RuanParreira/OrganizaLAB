<?php
include("link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validação de e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Por favor, insira um e-mail válido.');
    }

    // Validação de senha
    $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/';
    if (!preg_match($passwordRegex, $password)) {
        die('A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma letra minúscula e um caractere especial.');
    }

    // Verifica se o e-mail já existe no banco de dados
    $query = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        echo "email já cadastrado";
        exit();
    }

    $query->close();

    // Verifica se o usuário já existe no banco de dados
    $query = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        echo "esse usuário já existe";
        exit();
    }

    $query->close();

    // Insere o novo usuário no banco de dados
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        header("Location: ../pages/home.php");
    } else {
        header("Location: ../pages/register.php");
    }

    $stmt->close();
    $conn->close();
}
