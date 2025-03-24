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
  <link rel="stylesheet" href="../styles/sidebar.css" />
  <link rel="stylesheet" href="../styles/register.css" />
  <title>OrganizaLAB</title>
</head>

<body>
  <aside>
    <nav id="sidebar">
      <div id="sidebar_content">
        <div id="user">
          <img src="../images/logo.png" id="user_avatar" alt="Avatar" />

          <p id="user_infos">
            <span class="item-description"> OrganizaLAB </span>
            <span class="item-description"> Laboratorio de Info </span>
          </p>
        </div>

        <ul id="side_items">
          <li class="side-item">
            <a href="home.html">
              <i class="fa-solid fa-house"></i>
              <span class="item-description"> Dashboard </span>
            </a>
          </li>

          <li class="side-item active">
            <a href="#">
              <i class="fa-solid fa-user"></i>
              <span class="item-description"> Cadastro </span>
            </a>
          </li>

          <li class="side-item">
            <a href="nStarted.html">
              <i class="fa-solid fa-play"></i>
              <span class="item-description"> Não começou </span>
            </a>
          </li>

          <li class="side-item">
            <a href="inProgress.html">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <span class="item-description"> Em Andamento </span>
            </a>
          </li>

          <li class="side-item">
            <a href="done.html">
              <i class="fa-solid fa-circle-check"></i>
              <span class="item-description"> Prontos </span>
            </a>
          </li>

          <li class="side-item">
            <a href="finished.html">
              <i class="fa-solid fa-thumbs-up"></i>
              <span class="item-description"> Finalizados </span>
            </a>
          </li>
        </ul>

        <button id="open_btn">
          <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </nav>
  </aside>

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