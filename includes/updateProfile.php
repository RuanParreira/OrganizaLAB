<?php
include("link.php");
include("validate.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = trim($_POST['username']);

    // Validação básica
    if (empty($newUsername)) {
        die("O nome não pode estar vazio.");
    }

    // Atualiza o nome no banco de dados
    $sql = "UPDATE users SET username = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newUsername, $id_user);

    if ($stmt->execute()) {
        // Redireciona de volta para a página de configurações com uma mensagem de sucesso
        header("Location: ../pages/config.php");
    } else {
        echo "Erro ao atualizar o nome: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
