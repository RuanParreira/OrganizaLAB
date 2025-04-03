function openEditModal(data) {
    document.getElementById('editId').value = data.id;
    document.getElementById('editNome').value = data.nome; // Preenche o campo "Nome"
    document.getElementById('editNumero').value = data.numero; // Preenche o campo "Número"
    document.getElementById('editEquip').value = data.equip;
    document.getElementById('editProblema').value = data.problema;
    document.getElementById('editData').value = data.data;
    document.getElementById('editObs').value = data.obs;
    document.getElementById('editModal').style.display = 'block';
}

function closeEditModal() {
    // Esconde o modal
    document.getElementById('editModal').style.display = 'none';
}

// Fecha o modal ao clicar fora dele
window.onclick = function (event) {
    const modal = document.getElementById('editModal');
    if (event.target === modal) {
        closeEditModal();
    }
}
