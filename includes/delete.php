<?php
include("link.php");
session_start();

if (isset($_GET['id_service'])) {
    $id_service = intval($_GET['id_service']);
    $stmt = $conn->prepare("DELETE FROM services WHERE id_service = ? AND id_user = ?");
    $stmt->bind_param("ii", $id_service, $_SESSION['id_user']);
    if ($stmt->execute()) {
        header("Location: ../pages/inProgress.php?success=1");
    } else {
        header("Location: ../pages/inProgress.php?error=1");
    }
    $stmt->close();
}
$conn->close();
