<?php
include("../includes/valida.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/register.css" />
  <title>OrganizaLAB</title>
</head>

<body>
  <?php
  include("../includes/menu.php");
  ?>

  <div class="main">
    <div class="form">
      <form method="post" action="../includes/registrarEquip.php">
        <input type="text" name="nome" id="nome" placeholder="Nome:" required />
        <input type="text" name="numero" id="numero" placeholder="Numero:" required />
        <div class="celularDate">
          <input type="text" name="cpf" id="cpf" placeholder="CPF: " required />
          <input type="date" name="data" id="data" placeholder="Data:" required />
        </div>
        <div class="equipPro">
          <input type="text" name="equip" id="equip" placeholder="Equipamento:" required />
          <input type="text" name="problema" id="problema" placeholder="Problema Detectado:" />
        </div>
        <button input type="submit" class="Btn">CADASTRAR</button>
      </form>
    </div>
  </div>

  <script src="../scripts/sidebar.js"></script>
</body>

</html>