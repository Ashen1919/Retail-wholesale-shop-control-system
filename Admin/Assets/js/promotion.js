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

function addPromo() {
    // Get form data
    const title = document.getElementById('promoTitle').value;
    const description = document.getElementById('promoDescription').value;
    const image = document.getElementById('promoImage').files[0];

    // Add promo to table
    const table = document.querySelector('.table-section tbody');
    const row = table.insertRow();
    row.insertCell(0).innerText = 'New ID'; // Replace with actual ID logic
    row.insertCell(1).innerText = title;
    row.insertCell(2).innerText = description;
    row.insertCell(3).innerText = image.name;
    const actionCell = row.insertCell(4);
    actionCell.innerHTML = '<button onclick="openModal(\'updatePromoModal\')">Edit</button> <button onclick="deletePromo(this)">Delete</button>';

    // Close modal
    closeModal('addPromoModal');
}

function updatePromo() {
    // Update promo logic here
    closeModal('updatePromoModal');
}

function deletePromo(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}

function previewImage(event) {
    var output = document.getElementById('imagePreview');
    var container = document.getElementById('imagePreviewContainer');
    
    // Display the image preview container
    container.style.display = 'block';
    
    // Set the preview image source to the selected file
    output.src = URL.createObjectURL(event.target.files[0]);
}
