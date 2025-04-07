function openEditModal(data) {
    const modal = document.getElementById('editModal');
    modal.style.display = 'block'; // Garante que o modal seja exibido
    setTimeout(() => {
        modal.classList.add('show'); // Adiciona a classe para animação após o display ser configurado
    }, 10); // Pequeno atraso para garantir que a transição funcione

    // Preenche os campos do formulário com os dados recebidos
    document.getElementById('editId').value = data.id;
    document.getElementById('editNome').value = data.nome;
    document.getElementById('editNumero').value = data.numero;
    document.getElementById('editEquip').value = data.equip;
    document.getElementById('editProblema').value = data.problema;
    document.getElementById('editData').value = data.data;
    document.getElementById('editObs').value = data.obs;
}

function closeEditModal() {
    const modal = document.getElementById('editModal');
    modal.classList.remove('show'); // Remove a classe de animação
    setTimeout(() => {
        modal.style.display = 'none'; // Esconde o modal após a animação
    }, 300); // Tempo igual ao da animação
}