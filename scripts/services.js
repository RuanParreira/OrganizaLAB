document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('date');
    const today = new Date().toISOString().split('T')[0];
    dateInput.value = today;
});