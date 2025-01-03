// Function to toggle password visibility
function togglePasswordVisibility(inputId, toggleIconId) {
  const passwordField = document.getElementById(inputId);
  const toggleIcon = document.getElementById(toggleIconId);

  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  } else {
    passwordField.type = "password";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  }
}

// Add event listeners for the toggle icons
document.getElementById("togglePassword").addEventListener("click", () => {
  togglePasswordVisibility("password", "togglePassword");
});

document.getElementById("toggleRetypePassword").addEventListener("click", () => {
  togglePasswordVisibility("retype-password", "toggleRetypePassword");
});

// Password validation
document.getElementById("submit-btn").addEventListener("click", () => {
  const newPassword = document.getElementById("password").value;
  const retypePassword = document.getElementById("retype-password").value;
  const errorMessage = document.getElementById("error-message");

  if (newPassword === "" || retypePassword === "") {
    errorMessage.textContent = "Both fields are required.";
    errorMessage.style.display = "block";
  } else if (newPassword !== retypePassword) {
    errorMessage.textContent = "Passwords do not match.";
    errorMessage.style.display = "block";
  } else {
    errorMessage.style.display = "none";
    alert("Passwords match! Form submitted.");
  }
});
