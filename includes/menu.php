<?php
$current_page = basename($_SERVER['PHP_SELF']);


?>

<head>
    <link rel="stylesheet" href="../styles/sidebar.css" />
    <link rel="stylesheet" href="../styles/header.css" />
</head>

<body>
    <header>
        <div class="starter">
            <button id="open_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <h1>OrganizaLAB</h1>
        </div>
        <button id="sair" onclick="window.location.href='../includes/sair.php'">
            SAIR
        </button>
    </header>

    <aside>
        <nav id="sidebar">
            <div id="sidebar_content">
                <ul id="side_items">
                    <li class="side-item <?php echo $current_page == 'home.php' ? 'active' : ''; ?>">
                        <a href="../pages/home.php">
                            <i class="fa-solid fa-house"></i>
                            <span class="item-description"> Dashboard </span>
                        </a>
                    </li>

                    <li class="side-item <?php echo $current_page == 'register.php' ? 'active' : ''; ?>">
                        <a href="../pages/register.php">
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
            </div>
        </nav>
    </aside>

</body>