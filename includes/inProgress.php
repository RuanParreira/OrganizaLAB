<?php
include("../includes/link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_service = intval($_POST['id_service']);

    $sql = "UPDATE services SET status = 2 WHERE id_service = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_service);

    if ($stmt->execute()) {
        echo "Status do equipamento atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o status: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: ../pages/inProgress.php");
    exit;
}
