<?php
include("link.php");
session_start();

$id_usuario = $_SESSION['user_id'];
$_nome = $_POST["nome"];
$_numero = $_POST["numero"];
$_cpf = $_POST["cpf"];
$_data = $_POST["data"];
$_equipamento = $_POST["equip"];
$_problema = $_POST["problema"];

$stmt = $conn->prepare("INSERT INTO equipamentos (nome, numero, cpf, data, equip, problema, id_usuario) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $_nome, $_numero, $_cpf, $_data, $_equipamento, $_problema, $id_usuario);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: ../pages/services.php");
