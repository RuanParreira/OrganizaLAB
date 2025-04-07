<?php
include("../includes/link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $sql = "UPDATE equipamentos SET status = 3 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Equipamento finalizado com sucesso!";
    } else {
        echo "Erro ao finalizar o equipamento: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: ../pages/done.php");
    exit;
}
