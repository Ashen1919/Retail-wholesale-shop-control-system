const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');
const icon = document.getElementById('icon');

togglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = passwordInput.type === 'text';
  passwordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  icon.className = isPasswordVisible ? 'fas fa-eye-slash' : 'fas fa-eye';
});
