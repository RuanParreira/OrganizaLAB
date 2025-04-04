<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/indexHeader.css">
    <title>OrganizaLAB</title>
</head>

<body>
    <header>
        <div id="titulo">
            <img src="images/Organiza4.svg" alt="">
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
    </header>

    <main>
        <section id="hero">
            <div id="hero-cont">
                <h2>Seu laboratório de informática sempre <span>ORGANIZADO!</span></h2>
                <p>O OrganizaLAB ajuda a gerenciar laboratórios de informática de forma prática e organizada,
                    facilitando o controle de equipamentos</p>
                <button onclick="window.location.href='pages/signUp.php'">Começar</button>
            </div>
            <img src="images/fundo.png" alt="">
        </section>

        <section id="sobre">
            <img src="images/Sobre.png" alt="">
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
            <form id="form-cont" action="" method="post">
                <h5>Mande um <span>E-MAIL</span></h5>
                <input type="text" name="nome" id="nome" placeholder="NOME:" required>
                <input type="email" name="email" id="email" placeholder="E-MAIL:" required>
                <textarea name="mensagem" id="mensagem" placeholder="MENSAGEM:"></textarea>
                <button>ENVIAR</button>
        </section>
    </main>

    <footer>
        <p>Feito por Ruan Parreira © 2025</p>
    </footer>

    <script src="scripts/index.js"></script>

</body>

</html>