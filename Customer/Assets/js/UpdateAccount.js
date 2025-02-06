
const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');
const rt_passwordInput = document.getElementById('rt-password');
const rt_togglePassword = document.getElementById('rt-togglePassword');

togglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = passwordInput.type === 'text';
  passwordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  togglePassword.className = isPasswordVisible ? 'fas fa-eye-slash toggle-icon' : 'fas fa-eye toggle-icon';
});

rt_togglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = rt_passwordInput.type === 'text';
  rt_passwordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  rt_togglePassword.className = isPasswordVisible ? 'fas fa-eye-slash toggle-icon' : 'fas fa-eye toggle-icon';
});
renderTable();

function openModal(modalId) {
  document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
  document.getElementById(modalId).style.display = 'none';
}
