document.getElementById('addPromoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    addPromo();
});

document.getElementById('updatePromoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    updatePromo();
});

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}


function previewImage(event) {
    var output = document.getElementById('imagePreview');
    var container = document.getElementById('imagePreviewContainer');
    
    container.style.display = 'block';
    
    output.src = URL.createObjectURL(event.target.files[0]);
}