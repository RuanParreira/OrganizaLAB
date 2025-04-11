document.querySelectorAll('#mostrarSenhas').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário
        const passwordInput = this.previousElementSibling; // Seleciona o campo de senha relacionado
        const icon = this.querySelector('i'); // Seleciona o ícone dentro do botão

        // Alterna entre mostrar e esconder a senha
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye'); // Remove o ícone de "mostrar"
            icon.classList.add('fa-eye-slash'); // Adiciona o ícone de "esconder"
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash'); // Remove o ícone de "esconder"
            icon.classList.add('fa-eye'); // Adiciona o ícone de "mostrar"
        }
    });
});