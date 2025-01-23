document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById('loginFormModal');
    const registerModal = document.getElementById('registerFormModal');
    
    const loginBtn = document.getElementById('openLoginModal');
    const registerBtn = document.getElementById('openModalBtn');
    
    const loginCloseBtn = loginModal ? loginModal.querySelector('.close-btn') : null;
    const registerCloseBtn = registerModal ? registerModal.querySelector('.close-btn') : null;
    
    const loginTogglePassword = document.getElementById('loginTogglePassword');
    const registerTogglePassword = document.getElementById('registerTogglePassword');
    
    const loginPasswordInput = document.getElementById('loginPassword');
    const registerPasswordInput = document.getElementById('registerPassword');

    // Function to open login modal
    function openLoginModal() {
        if (registerModal) registerModal.style.display = 'none';
        if (loginModal) loginModal.style.display = 'flex';
    }

    // Function to open register modal
    function openRegisterModal() {
        if (loginModal) loginModal.style.display = 'none';
        if (registerModal) registerModal.style.display = 'flex';
    }

    // Function to close login modal
    function closeLoginModal() {
        if (loginModal) loginModal.style.display = 'none';
    }

    // Function to close register modal
    function closeRegisterModal() {
        if (registerModal) registerModal.style.display = 'none';
    }

    // Event listeners with null checks
    if (loginBtn) {
        loginBtn.onclick = openLoginModal;
    }

    if (registerBtn) {
        registerBtn.onclick = openRegisterModal;
    }

    if (loginCloseBtn) {
        loginCloseBtn.onclick = closeLoginModal;
    }

    if (registerCloseBtn) {
        registerCloseBtn.onclick = closeRegisterModal;
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        if (loginModal && event.target == loginModal) {
            closeLoginModal();
        }
        if (registerModal && event.target == registerModal) {
            closeRegisterModal();
        }
    }

    // Close modals with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeLoginModal();
            closeRegisterModal();
        }
    });

    // Toggle password visibility for login
    if (loginTogglePassword && loginPasswordInput) {
        loginTogglePassword.addEventListener('click', function() {
            const type = loginPasswordInput.type === 'password' ? 'text' : 'password';
            loginPasswordInput.type = type;
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    }

    // Toggle password visibility for register
    if (registerTogglePassword && registerPasswordInput) {
        registerTogglePassword.addEventListener('click', function() {
            const type = registerPasswordInput.type === 'password' ? 'text' : 'password';
            registerPasswordInput.type = type;
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    }
});