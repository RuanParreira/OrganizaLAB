<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signIn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <title>Entrar-OrganizaLAB</title>
</head>

<body>
    <main>
        <div class="logo">
            <img src="../images/logo.png" alt="">
            <h1>Organiza<span>LAB</span></h1>
            </img>
        </div>
        <form action="../includes/signIn.php" method="post" class="form">
            <div class="flex-column">
                <label>Email </label>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign-icon lucide-at-sign">
                    <circle cx="12" cy="12" r="4" />
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8" />
                </svg>
                <input type="email" name="email" id="email" class="input" placeholder="Digite seu e-mail" autocomplete="email">
            </div>

            <div class="flex-column">
                <label>Senha </label>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-keyhole-icon lucide-lock-keyhole">
                    <circle cx="12" cy="16" r="1" />
                    <rect x="3" y="10" width="18" height="12" rx="2" />
                    <path d="M7 10V7a5 5 0 0 1 10 0v3" />
                </svg>
                <input type="password" name="password" id="password" class="input" placeholder="Digite sua senha">
                <button id="mostrarSenhas" type="button"><i class="fa-regular fa-eye"></i></button>
            </div>

            <div class="flex-row">
                <span class="span">Esqueceu a senha?</span>
            </div>
            <button type="submit" id="button-submit">Entrar</button>
            <p class="p">Não tem uma conta? <a href="signUp.php" class="span">Registrar</a>
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

    <script src="../scripts/showPass.js"></script>
</body>

</html>