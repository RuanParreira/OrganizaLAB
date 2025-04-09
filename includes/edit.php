<?php
include("../includes/link.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_service = $_POST['id_service'];
    $number_client = $_POST['number_client'];
    $name_client = $_POST['name_client'];
    $equipment = $_POST['equipment'];
    $problem = $_POST['problem'];
    $date = $_POST['date'];
    $obs = $_POST['obs'];

    $sql = "UPDATE services SET number_client = ?, name_client = ?, equipment = ?, problem = ?, date = ?, obs = ? WHERE id_service = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $number_client, $name_client, $equipment, $problem, $date, $obs, $id_service);

    if ($stmt->execute()) {
        header("Location: ../pages/inProgress.php");
    } else {
        echo "Erro ao atualizar o equipamento.";
    }
}
