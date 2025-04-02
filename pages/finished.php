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
    <title>Equipamentos Finalizados</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <h1>Equipamentos Finalizados</h1>
        <?php
        $sql = "SELECT id, nome, equip, problema FROM equipamentos WHERE status = 3 AND id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Nome</th><th>Equipamento</th><th>Problema Detectado</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['equip']) . "</td>";
                echo "<td>" . htmlspecialchars($row['problema']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum equipamento finalizado encontrado.</p>";
        }
        ?>
    </main>
</body>

</html>