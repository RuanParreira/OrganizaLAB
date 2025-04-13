<?php
include("../includes/validate.php");
include("../includes/link.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/nStarted.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <title>Serviços Registrados</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <h1>Serviços <span>Não Iniciados<span></h1>
        <div class="cards">
            <?php
            $sql = "SELECT id_service, name_client, number_client, equipment, problem, date FROM services WHERE status = 0 AND id_user = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id_user);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<h2>" . htmlspecialchars($row['name_client']) . "</h2>";
                    echo "<h3>" . htmlspecialchars($row['number_client']) . "</h3>";
                    echo "<div class='card-fundo'>";
                    echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equipment']) . "</p>";
                    echo "<p><strong>Problema:</strong> " . htmlspecialchars($row['problem']) . "</p>";
                    echo "<p><strong>Data:</strong> " . htmlspecialchars($row['date']) . "</p>";
                    echo "<form method='POST' action='../includes/nStarted.php'>";
                    echo "<input type='hidden' name='id_service' value='" . htmlspecialchars($row['id_service']) . "'>";
                    echo "</div>";
                    echo "<button type='submit'>Começar</button>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "<p id='nResultado'>Nenhum serviço encontrado.</p>";
            }
            ?>
        </div>
    </main>
</body>

</html>