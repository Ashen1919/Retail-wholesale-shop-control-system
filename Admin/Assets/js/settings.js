document.getElementById('updateAdminForm').addEventListener('submit', function(event) {
    event.preventDefault();
    updateAdmin();
});

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}