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
        <a id="header-home" href="home.php">
            <h1>Organiza<span>LAB<span></h1>
        </a>
    </div>
    <button id="avatar-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round-icon lucide-circle-user-round">
            <path d="M18 20a6 6 0 0 0-12 0" />
            <circle cx="12" cy="10" r="4" />
            <circle cx="12" cy="12" r="10" />
        </svg>
    </button>

    <div class="modal-avatar">
        <i id="seta-modal" class="fa-solid fa-caret-up"></i>
        <path d="M13.73 4a2 2 0 0 0-3.46 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z" />
        </svg>
        <ul class="modal-cont">
            <a href="../pages/config.php">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-pen-icon lucide-user-pen">
                        <path d="M11.5 15H7a4 4 0 0 0-4 4v2" />
                        <path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                        <circle cx="10" cy="7" r="4" />
                    </svg>
                    Perfil
                </li>
            </a>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
                Conta
            </li>
            <hr>
            <button id="sair" onclick="window.location.href='../includes/leave.php'">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-door-open-icon lucide-door-open">
                        <path d="M11 20H2" />
                        <path d="M11 4.562v16.157a1 1 0 0 0 1.242.97L19 20V5.562a2 2 0 0 0-1.515-1.94l-4-1A2 2 0 0 0 11 4.561z" />
                        <path d="M11 4H8a2 2 0 0 0-2 2v14" />
                        <path d="M14 12h.01" />
                        <path d="M22 20h-3" />
                    </svg>
                    SAIR
            </button>
            </li>
        </ul>
    </div>
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
                    <i class="fa-solid fa-filter"></i>
                    <span class="item-description"> Finalizados </span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<aside id="mobile">
    <nav id="sMobile">
        <ul id='mobile-items'>
            <li class="mobile-item <?php echo $current_page == 'home.php' ? 'active' : ''; ?>">
                <a href="../pages/home.php">
                    <i class="fa-solid fa-house"></i> <br>
                </a>
            </li>
            <li class="mobile-item <?php echo $current_page == 'services.php' ? 'active' : ''; ?>">
                <a href="../pages/services.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
            <li class="mobile-item <?php echo $current_page == 'nStarted.php' ? 'active' : ''; ?>">
                <a href="../pages/nStarted.php">
                    <i class="fa-solid fa-play"></i>
                </a>
            </li>
            <li class="mobile-item <?php echo $current_page == 'inProgress.php' ? 'active' : ''; ?>">
                <a href="../pages/inProgress.php">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </a>
            </li>
            <li class="mobile-item <?php echo $current_page == 'done.php' ? 'active' : ''; ?>">
                <a href="../pages/done.php">
                    <i class="fa-solid fa-circle-check"></i>
                </a>
            </li>
            <li class="mobile-item <?php echo $current_page == 'finished.php' ? 'active' : ''; ?>">
                <a href="../pages/finished.php">
                    <i class="fa-solid fa-filter"></i>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<script src="../scripts/sidebar.js"></script>
<script src="../scripts/avatar.js"></script>