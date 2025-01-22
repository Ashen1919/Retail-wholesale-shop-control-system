

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

function upreviewImage(event) {
    var output = document.getElementById('u_imagePreview');
    var container = document.getElementById('u_imagePreviewContainer');
    
    container.style.display = 'block';
    
    output.src = URL.createObjectURL(event.target.files[0]);
}
