<?php
include("../includes/validate.php");
include("../includes/link.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="stylesheet" href="../styles/home.css" />
  <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
  <title>Inicio-OrganizaLAB</title>
</head>

<body>
  <?php
  include("../includes/menu.php");

  // Consultas para buscar os services por status
  $sqlStatus0 = "SELECT name_client, equipment, date FROM services WHERE status = 0 AND id_user = ?";
  $sqlStatus1 = "SELECT name_client, equipment, date FROM services WHERE status = 1 AND id_user = ?";
  $sqlStatus2 = "SELECT name_client, equipment, date FROM services WHERE status = 2 AND id_user = ?";

  // Preparar e executar as consultas para status 0
  $stmt0 = $conn->prepare($sqlStatus0);
  $stmt0->bind_param("i", $id_user);
  $stmt0->execute();
  $result0 = $stmt0->get_result();

  // Preparar e executar as consultas para status 1
  $stmt1 = $conn->prepare($sqlStatus1);
  $stmt1->bind_param("i", $id_user);
  $stmt1->execute();
  $result1 = $stmt1->get_result();

  // Preparar e executar as consultas para status 2
  $stmt2 = $conn->prepare($sqlStatus2);
  $stmt2->bind_param("i", $id_user);
  $stmt2->execute();
  $result2 = $stmt2->get_result();
  ?>

  <main>
    <div class="buttons">
      <button class="buttonStatus active" id="iniciados">N-Iniciados</button>
      <button class="buttonStatus" id="progresso">Progresso</button>
      <button class="buttonStatus" id="concluido">Concluidos</button>
    </div>

    <div id="cards">
      <div class="card active" id="card-iniciados">
        <a href="nStarted.php">
          <h2>Não Iniciados</h2>
        </a>
        <?php
        if ($result0->num_rows > 0) {
          while ($row = $result0->fetch_assoc()) {
            echo "<div class='equipamento'>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($row['name_client']) . "</p>";
            echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equipment']) . "</p>";
            echo "<p><strong>Data:</strong> " . htmlspecialchars($row['date']) . "</p>";
            echo "</div>";
          }
        } else {
          echo "<p>Nenhum equipamento encontrado.</p>";
        }
        ?>
      </div>

      <!-- Card para status 1 -->
      <div class="card" id="card-progresso">
        <a href="inProgress.php">
          <h2>Em Progresso</h2>
        </a>
        <?php
        if ($result1->num_rows > 0) {
          while ($row = $result1->fetch_assoc()) {
            echo "<div class='equipamento'>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($row['name_client']) . "</p>";
            echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equipment']) . "</p>";
            echo "<p><strong>Data:</strong> " . htmlspecialchars($row['date']) . "</p>";
            echo "</div>";
          }
        } else {
          echo "<p>Nenhum equipamento encontrado.</p>";
        }
        ?>

      </div>

      <!-- Card para status 2 -->
      <div class="card" id="card-concluido">
        <a href="done.php">
          <h2>Concluídos</h2>
        </a>
        <?php
        if ($result2->num_rows > 0) {
          while ($row = $result2->fetch_assoc()) {
            echo "<div class='equipamento'>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($row['name_client']) . "</p>";
            echo "<p><strong>Equipamento:</strong> " . htmlspecialchars($row['equipment']) . "</p>";
            echo "<p><strong>Data:</strong> " . htmlspecialchars($row['date']) . "</p>";
            echo "</div>";
          }
        } else {
          echo "<p>Nenhum equipamento encontrado.</p>";
        }
        ?>
      </div>
    </div>
  </main>

  <script src="../scripts/home.js"></script>
</body>

</html>