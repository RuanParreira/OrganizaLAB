<?php
include("../includes/validate.php");
include("../includes/link.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/inProgress.css">
    <title>Equipamentos em Progresso</title>
</head>

<body>
    <?php
    include("../includes/menu.php");
    ?>

    <main>
        <h1>Serviços <span>em Progresso</span></h1>
        <div class="cards">
            <?php
            $sql = "SELECT id, nome, equip, problema, data, obs, numero FROM equipamentos WHERE status = 1 AND id_usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id_usuario);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<div class='card-header'>";
                    echo "<h2>" . htmlspecialchars($row['nome']) . "</h2>";
                    echo "<h3>" . htmlspecialchars($row['numero']) . "</h3>";
                    echo "</div>";
                    echo "<div class='infoFundo'>";
                    echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equip']) . "</p>";
                    echo "<p><strong>Problema:</strong> " . htmlspecialchars($row['problema']) . "</p>";
                    echo "<p><strong>Data:</strong> " . htmlspecialchars($row['data']) . "</p>";
                    echo "</div>";
                    echo "<div class='observacao-container'>";
                    echo "<p><strong>Observações:</strong></p>";
                    echo "<textarea readonly>" . htmlspecialchars($row['obs']) . "</textarea>";
                    echo "</div>";
                    echo "<div id='botoes'>";
                    echo "<form method='POST' action='../includes/inProgress.php' style='margin: 0;'>";
                    echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
                    echo "<button type='submit'>Pronto</button>";
                    echo "</form>";
                    echo "<button type='button' class='edit-btn' onclick='openEditModal(" . htmlspecialchars(json_encode($row)) . ")'>Editar</button>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p id='nResultado'>Nenhum serviço encontrado.</p>";
            }
            ?>
        </div>
    </main>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Editar Equipamento</h2>
            <form id="editForm" method="POST" action="../includes/edit.php">
                <input type="hidden" name="id" id="editId">
                <label for="editNome">Nome:</label>
                <input type="text" name="nome" id="editNome" required>
                <label for="editNumero">Número:</label>
                <input type="text" name="numero" id="editNumero" required>
                <label for="editEquip">Equipamento:</label>
                <input type="text" name="equip" id="editEquip" required>
                <label for="editProblema">Problema:</label>
                <textarea name="problema" id="editProblema" required></textarea>
                <label for="editData">Data:</label>
                <input type="date" name="data" id="editData" required>
                <label for="editObs">Observações:</label>
                <textarea name="obs" id="editObs"></textarea>
                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>

    <script src="../scripts/edit.js"></script>
</body>

</html>