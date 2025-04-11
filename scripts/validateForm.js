const emailInput = document.getElementById('email');
const form = document.querySelector('.form');

form.addEventListener('submit', function (event) {
    const email = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        event.preventDefault();
        alert('Por favor, insira um e-mail válido.');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const form = document.querySelector('.form');

    form.addEventListener('submit', function (event) {
        const password = passwordInput.value.trim();
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;

        if (!passwordRegex.test(password)) {
            event.preventDefault();
            alert('A senha deve ter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma letra minúscula e um caractere especial.');
        }
    });
});