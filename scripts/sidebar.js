document.getElementById('open_btn').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open-sidebar');
});

document.addEventListener('click', function (event) {
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('open_btn');
    if (!sidebar.contains(event.target) && !openBtn.contains(event.target)) {
        sidebar.classList.remove('open-sidebar');
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const avatarBtn = document.getElementById('avatar-btn');
    const modalAvatar = document.querySelector('.modal-avatar');

    avatarBtn.addEventListener('click', function () {
        // Alterna a classe 'show' para exibir ou ocultar o modal-avatar
        modalAvatar.classList.toggle('show');
    });

    // Fecha o modal se clicar fora dele
    document.addEventListener('click', function (event) {
        if (!avatarBtn.contains(event.target) && !modalAvatar.contains(event.target)) {
            modalAvatar.classList.remove('show');
        }
    });
});