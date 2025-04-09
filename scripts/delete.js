function confirmDelete(id) {
    if (confirm("Tem certeza de que deseja excluir este serviço?")) {
        // Redireciona para o script de exclusão com o ID do serviço
        window.location.href = `../includes/delete.php?id_service=${id}`;
    }
}