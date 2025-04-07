<?php
include("../includes/link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $sql = "UPDATE equipamentos SET status = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Status do equipamento atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o status: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: ../pages/nStarted.php");
    exit;
}
