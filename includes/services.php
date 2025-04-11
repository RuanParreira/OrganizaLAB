<?php
include("link.php");
include("validateCPF.php");
session_start();

$id_user = $_SESSION['id_user'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_client = trim($_POST['name_client']);
    $number_client = trim($_POST['number_client']);
    $cpf_client = trim($_POST['cpf_client']);
    $date = trim($_POST['date']);
    $equipment = trim($_POST['equipment']);
    $problem = trim($_POST['problem']);

    // Sanitização do CPF: Remove caracteres não numéricos
    $cpf_client = preg_replace('/[^0-9]/', '', $cpf_client);

    // Validação do CPF
    if (!validarCPF($cpf_client)) {
        die('CPF inválido!');
    }

    // Aqui você pode continuar com o processamento, como salvar no banco de dados
    $stmt = $conn->prepare("INSERT INTO services (id_user, name_client, number_client, cpf_client, date, equipment, problem) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $id_user, $name_client, $number_client, $cpf_client, $date, $equipment, $problem);

    if ($stmt->execute()) {
        $_SESSION['resposta'] = "Serviço cadastrado com sucesso!";
        header("Location: ../pages/services.php");
    } else {
        echo "Erro ao cadastrar o serviço.";
    }

    $stmt->close();
    $conn->close();
}
