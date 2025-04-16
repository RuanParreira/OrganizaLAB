<?php
include("../includes/validate.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/services.css" />
  <link rel="icon" href="../images/logo.png" type="image/x-icon" />
  <title>Registrar Serviço</title>
</head>

<body>
  <?php
  include("../includes/menu.php");
  ?>

  <main>
    <form method="post" action="../includes/services.php" autocomplete="off">
      <input type="text" name="name_client" id="name_client" placeholder="Nome:" required />
      <input type="text" name="number_client" id="number_client" placeholder="Numero:" required />
      <div class="celularDate">
        <input type="text" name="cpf_client" id="cpf_client" placeholder="CPF: " required />
        <input type="date" name="date" id="date" placeholder="Data:" required />
      </div>
      <div class="equipPro">
        <input type="text" name="equipment" id="equipment" placeholder="Equipamento:" required />
        <input type="text" name="problem" id="problem" placeholder="Problema Detectado:" />
      </div>
      <button input type="submit" id="Btn">CADASTRAR</button>
    </form>
  </main>

  <script>
    <?php
    if (isset($_SESSION['resposta'])) {
      echo ("alert('" . $_SESSION['resposta'] . "')");
      unset($_SESSION['resposta']);
    }
    ?>
  </script>
  <script src="../scripts/validadeServices.js"></script>
  <script src="../scripts/services.js"></script>
</body>

</html>