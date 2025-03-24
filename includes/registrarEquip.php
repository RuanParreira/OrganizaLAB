<?php
include("conexao.php");

$_nome = $_POST["nome"];
$_numero = $_POST["numero"];
$_cpf = $_POST["cpf"];
$_data = $_POST["data"];
$_equipamento = $_POST["equip"];
$_problema = $_POST["problema"];

$stmt = $conn->prepare("INSERT INTO equipamentos (nome, numero, cpf, data, equip, problema) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $_nome, $_numero, $_cpf, $_data, $_equipamento, $_problema);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: ../pages/register.php");
