const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = passwordInput.type === 'text';
  passwordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  togglePassword.className = isPasswordVisible ? 'fas fa-eye-slash toggle-icon' : 'fas fa-eye toggle-icon';
});
