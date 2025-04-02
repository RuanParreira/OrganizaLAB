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
    <title>Equipamentos em Progresso</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <?php
        $sql = "SELECT id, nome, equip, problema FROM equipamentos WHERE status = 1"; // Busca equipamentos com status 1
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nome</th><th>Equipamento</th><th>Problema Detectado</th><th>Ação</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['equip']) . "</td>";
                echo "<td>" . htmlspecialchars($row['problema']) . "</td>";
                echo "<td>
                        <form method='POST' action='../includes/inProgress.php' style='display:inline;'>
                            <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                            <button type='submit'>Pronto</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum equipamento em progresso encontrado.</p>";
        }
        ?>
    </main>
</body>

</html>