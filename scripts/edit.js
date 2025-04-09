function openEditModal(data) {
    const modal = document.getElementById('editModal');
    modal.style.display = 'block';
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);

    document.getElementById('editId').value = data.id_service;
    document.getElementById('editNome').value = data.name_client;
    document.getElementById('editNumero').value = data.number_client;
    document.getElementById('editEquip').value = data.equipment;
    document.getElementById('editProblema').value = data.problem;
    document.getElementById('editData').value = data.date;
    document.getElementById('editObs').value = data.obs;
}

function closeEditModal() {
    const modal = document.getElementById('editModal');
    modal.classList.remove('show');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
}