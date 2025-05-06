document.addEventListener('DOMContentLoaded', function () {
    const avatarBtn = document.getElementById('avatar-btn');
    const modalAvatar = document.querySelector('.modal-avatar');

    avatarBtn.addEventListener('click', function () {
        modalAvatar.classList.toggle('show');
    });

    document.addEventListener('click', function (event) {
        if (!avatarBtn.contains(event.target) && !modalAvatar.contains(event.target)) {
            modalAvatar.classList.remove('show');
        }
    });
});