<?php
include("../includes/validate.php");
include("../includes/link.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" href="../styles/finished.css" />
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <title>Serviços Finalizados</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <h1>Serviços <span>Finalizados</span></h1>
        <?php
        $sql = "SELECT id_service, cpf_client, name_client, number_client, equipment, problem, date FROM services WHERE status = 3 AND id_user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<div class='table-container'>";
            echo "<table border='1'>";
            echo "<tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Equipamento</th>
            <th>Problema</th>
            <th>Data</th>
            </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['cpf_client']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name_client']) . "</td>";
                echo "<td>" . htmlspecialchars($row['number_client']) . "</td>";
                echo "<td>" . htmlspecialchars($row['equipment']) . "</td>";
                echo "<td>" . htmlspecialchars($row['problem']) . "</td>";
                echo "<td id='data'>" . htmlspecialchars($row['date']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p id='nResultado'>Nenhum serviço encontrado.</p>";
        }
        ?>
    </main>
</body>

</html>