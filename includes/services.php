<?php
include("link.php");
session_start();

$id_user = $_SESSION['id_user'];
$_name_client = $_POST["name_client"];
$_number_client = $_POST["number_client"];
$_cpf_client = $_POST["cpf_client"];
$_date = $_POST["date"];
$_equipment = $_POST["equipment"];
$_problem = $_POST["problem"];

$stmt = $conn->prepare("INSERT INTO services (id_user, name_client, number_client, cpf_client, date, equipment, problem) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssss", $id_user, $_name_client, $_number_client, $_cpf_client, $_date, $_equipment, $_problem);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: ../pages/services.php");
