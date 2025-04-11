<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signUp.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registrar-OrganizaLAB</title>
</head>

<body>
    <main>
        <div class="logo">
            <img src="../images/logo.png" alt="">
            <h1>Organiza<span>LAB</span></h1>
            </img>
        </div>
        <form action="../includes/signUp.php" method="post" class="form">
            <div class="flex-column">
                <label>Usuario</label>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-icon lucide-user-round">
                    <circle cx="12" cy="8" r="5" />
                    <path d="M20 21a8 8 0 0 0-16 0" />
                </svg>
                <input type="text" name="username" id="username" class="input" placeholder="Digite seu usuario" required>
            </div>

            <div class="flex-column">
                <label>Email </label>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign-icon lucide-at-sign">
                    <circle cx="12" cy="12" r="4" />
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8" />
                </svg>
                <input type="text" name="email" id="email" class="input" placeholder="Digite seu e-mail" required>
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
                <input type="password" name="password" id="password" class="input" placeholder="Digite sua senha" required>
                <button id="mostrarSenhas" type="button"><i class="fa-regular fa-eye"></i></button>
            </div>

            <button type="input" id="button-submit">Registar</button>
            <p class="p">Já tem uma conta? <a href="signIn.php" class="span">Entrar</a>
        </form>
    </main>
    <script src="../scripts/validateForm.js"></script>
    <script src="../scripts/showPass.js"></script>
</body>

</html>