<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" href="../styles/menu.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<header>
    <div class="starter">
        <button id="open_btn">
            <i class="fa-solid fa-bars"></i>
        </button>
        <h1>Organiza<span>LAB<span></h1>
    </div>
    <button id="sair" onclick="window.location.href='../includes/leave.php'">
        SAIR
    </button>
</header>

<aside>
    <nav id="sidebar">
        <ul id="side_items">
            <li class="side-item <?php echo $current_page == 'home.php' ? 'active' : ''; ?>">
                <a href="../pages/home.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="item-description"> Inicio </span>
                </a>
            </li>

            <li class="side-item <?php echo $current_page == 'services.php' ? 'active' : ''; ?>">
                <a href="../pages/services.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="item-description"> Cadastro </span>
                </a>
            </li>

            <li class="side-item <?php echo $current_page == 'nStarted.php' ? 'active' : ''; ?>">
                <a href="../pages/nStarted.php">
                    <i class="fa-solid fa-play"></i>
                    <span class="item-description"> Não começou </span>
                </a>
            </li>

            <li class="side-item <?php echo $current_page == 'inProgress.php' ? 'active' : ''; ?>">
                <a href="../pages/inProgress.php">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="item-description"> Em Andamento </span>
                </a>
            </li>

            <li class="side-item <?php echo $current_page == 'done.php' ? 'active' : ''; ?>">
                <a href="../pages/done.php">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="item-description"> Prontos </span>
                </a>
            </li>

            <li class="side-item <?php echo $current_page == 'finished.php' ? 'active' : ''; ?>">
                <a href="../pages/finished.php">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span class="item-description"> Finalizados </span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<aside id="mobile">
    <nav id="sMobile">
        <ul>
            <li>
                <a href="../pages/home.php">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../pages/services.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../pages/nStarted.php">
                    <i class="fa-solid fa-play"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../pages/inProgress.php">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../pages/done.php">
                    <i class="fa-solid fa-circle-check"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../pages/finished.php">
                    <i class="fa-solid fa-thumbs-up"></i>
                </a>
            </li>
        </ul>
    </nav>
</aside>



<script src="../scripts/sidebar.js"></script>