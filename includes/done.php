<?php
include("../includes/link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_service = intval($_POST['id_service']);

    $sql = "UPDATE services SET status = 3 WHERE id_service = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_service);

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
