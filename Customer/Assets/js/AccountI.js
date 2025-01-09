// script.js
document.getElementById('logout').addEventListener('click', () => {
    alert('Logged out successfully!');
    // Redirect to login page
    window.location.href = 'login.html';
});

document.getElementById('deleteAccount').addEventListener('click', () => {
    if (confirm('Are you sure you want to delete your account?')) {
        alert('Account deleted!');
        // Redirect to homepage or perform additional actions
        window.location.href = 'homepage.html';
    }
});

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
  }
  