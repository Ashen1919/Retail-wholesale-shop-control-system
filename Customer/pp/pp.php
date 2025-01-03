<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New and Retype Password</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="password-section">
    <label for="password">New Password</label>
    <input type="password" id="password" placeholder="Enter your new password">
    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
  </div>
  <div class="password-section">
    <label for="retype-password">Retype Password</label>
    <input type="password" id="retype-password" placeholder="Retype your password">
    <i id="toggleRetypePassword" class="fas fa-eye-slash toggle-icon"></i>
  </div>
  <div id="error-message"></div>
  <button id="submit-btn">Submit</button>

  <script src="script.js"></script>
</body>
</html>
