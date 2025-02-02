const container = document.getElementById("container");
const registerbtn = document.getElementById("register");
const loginbtn = document.getElementById("login");

registerbtn.addEventListener("click", () => {
    container.classList.add("active");
});

loginbtn.addEventListener("click", () => {
    container.classList.remove("active");
});

const passwordInput = document.getElementById('signinPwd');
const togglePassword = document.getElementById('signinTogglePassword');

togglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = passwordInput.type === 'text';
  passwordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  togglePassword.className = isPasswordVisible ? 'fas fa-eye-slash toggle-icon' : 'fas fa-eye toggle-icon';
});

const signupPasswordInput = document.getElementById('signupPwd');
const signupTogglePassword = document.getElementById('signupTogglePassword');

signupTogglePassword.addEventListener('click', () => {
  // Toggle password visibility
  const isPasswordVisible = signupPasswordInput.type === 'text';
  signupPasswordInput.type = isPasswordVisible ? 'password' : 'text';

  // Toggle the icon
  signupTogglePassword.className = isPasswordVisible ? 'fas fa-eye-slash toggle-icon' : 'fas fa-eye toggle-icon';
});