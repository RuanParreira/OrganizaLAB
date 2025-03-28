const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // Ajuste o valor conforme necessário
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});