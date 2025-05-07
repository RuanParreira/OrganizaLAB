<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>OrganizaLAB</title>
</head>

<body>
    <header>
        <div id="titulo">
            <img src="images/logo.png" alt="">
            <h1>Organiza<span>LAB</span></h1>
        </div>

        <nav id="menu">
            <ul id="header-menu">
                <li><a class="header-menu-item" href="#hero">inicio</a></li>
                <li><a class="header-menu-item" href="#sobre">sobre</a></li>
                <li><a class="header-menu-item" href="#form">contato</a></li>
            </ul>
        </nav>

        <button id="header-botton" onclick="window.location.href='pages/signIn.php'">
            Entrar
        </button>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#hero">Inicio</a>
            <a href="#sobre">Sobre</a>
            <a href="#form">Contato</a>
            <a href="pages/signIn.php">Entrar</a>
        </div>
        <span id="buttonSidebar" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    </header>

    <main>
        <section id="hero">
            <div id="hero-cont">
                <h2>Seu laboratório de informática sempre <span>ORGANIZADO!</span></h2>
                <p>O OrganizaLAB ajuda a gerenciar laboratórios de informática de forma prática e organizada, facilitando o controle de equipamentos</p>
                <form id="hero-form" action="pages/signUp.php" method="get">
                    <input type="text" name="email" id="email" placeholder="E-MAIL">
                    <button type="submit">Começar</button>
                </form>
            </div>
            <img src="images/hero.svg" alt="">
        </section>

        <section id="sobre">
            <img src="images/sobre.svg" alt="">
            <div id="sobre-cont">
                <h3>ORGANIZA<span id="titulo-sobre-cont">LAB</span></h3>
                <p><span>OrganizaLAB </span>é um <span>website inovador </span>desenvolvido para <span>otimizar
                    </span>e <span>agilizar </span>a rotina de profissionais
                    que trabalham com <span>assistência técnica </span>e <span>manutenção </span>de computadores, além
                    de outros dispositivos
                    eletrônicos. A plataforma foi projetada para oferecer uma <span>solução completa </span>de
                    <span>organização </span>,
                    garantindo maior <span>eficiência </span>e <span>controle </span>sobre os equipamentos em
                    <span>reparo, histórico de serviços</span> e
                    <span>gestão de clientes.</span>
                    <hr><br>
                </p>
                <h4><span> Benefícios</span> Do WebSite: </h4>
                <ul id="beneficios">
                    <li>Gerenciamento de Ordens de Serviço</li>
                    <li>Cadastro de Clientes e Equipamentos</li>
                    <li>Controle de Status dos
                        Reparos</li>
                    <li>Gestão de Prazos e Notificações</li>
                </ul>

            </div>
        </section>

        <section id="form">
            <h6>Fale <span>conosco!</span></h6>
            <form id="form-cont" action="https://formsubmit.co/suporte@organizalab.site" method="post">
                <h5>Mande um <span>E-MAIL</span></h5>
                <input type="text" name="nome" id="nome" placeholder="NOME:" required>
                <input type="email" name="email" id="email" placeholder="E-MAIL:" required>
                <textarea name="mensagem" id="mensagem" placeholder="MENSAGEM:" required></textarea>
                <button type="submit">ENVIAR</button>
        </section>
    </main>

    <footer>
        <p>Feito por Ruan Parreira &copy; 2025</p>
    </footer>


    <script src="scripts/index.js"></script>

</body>

</html>