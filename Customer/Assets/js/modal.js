document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('registerFormModal');
    const btn = document.getElementById('openModalBtn');
    const span = document.getElementsByClassName('close-btn')[0];
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    // Open modal
    btn.onclick = function() {
        modal.style.display = 'flex'; // Changed to flex for better layout control
    }

    // Close modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // Close modal if clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Toggle password visibility
    togglePassword.addEventListener('click', function() {
        // Check the current type of the password field
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;

        // Toggle the icon class
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
    });
});
