<?php
include("../includes/validate.php");
include("../includes/link.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/done.css">
    <title>Equipamentos Concluídos</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <h1>Serviços <span>Concluídos</span></h1>
        <div class="cards">
            <?php
            $sql = "SELECT id, nome, equip, problema, data FROM equipamentos WHERE status = 2 AND id_usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id_usuario);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<h2>" . htmlspecialchars($row['nome']) . "</h2>";
                    echo "<div class='card-fundo'>";
                    echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equip']) . "</p>";
                    echo "<p><strong>Problema Detectado:</strong> " . htmlspecialchars($row['problema']) . "</p>";
                    echo "<p><strong>Data:</strong> " . htmlspecialchars($row['data']) . "</p>";
                    echo "<form method='POST' action='../includes/done.php'>";
                    echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
                    echo "</div>";
                    echo "<button type='submit'>Finalizar</button>";
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