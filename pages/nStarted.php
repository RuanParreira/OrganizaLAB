<?php
include("../includes/valida.php");
include("../includes/conexao.php");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/nStarted.css">
    <title>Equipamentos Registrados</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <?php
        $sql = "SELECT id, nome, equip, problema FROM equipamentos WHERE status = 0"; // Inclua o campo 'id' para identificar cada equipamento
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nome</th><th>Equipamento</th><th>Problema Detectado</th><th>Ação</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['equip']) . "</td>";
                echo "<td>" . htmlspecialchars($row['problema']) . "</td>";
                echo "<td>";
                echo "<form method='POST' action='../includes/nStarted.php' style='display:inline;'>";
                echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
                echo "<button type='submit'>Começar</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum equipamento com status 0 encontrado.</p>";
        }
        ?>
    </main>
</body>

</html>