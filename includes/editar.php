<?php
include("../includes/conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $numero = $_POST['numero']; // Recebe o campo "Número"
    $nome = $_POST['nome']; // Recebe o campo "Nome"
    $equip = $_POST['equip'];
    $problema = $_POST['problema'];
    $data = $_POST['data'];
    $obs = $_POST['obs'];

    $sql = "UPDATE equipamentos SET numero = ?, nome = ?, equip = ?, problema = ?, data = ?, obs = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $numero, $nome, $equip, $problema, $data, $obs, $id);

    if ($stmt->execute()) {
        header("Location: ../pages/inProgress.php");
    } else {
        echo "Erro ao atualizar o equipamento.";
    }
}
