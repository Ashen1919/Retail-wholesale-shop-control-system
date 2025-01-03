<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/UpdateAccount.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="form-container">


<h1>Update Account</h1>
<form id="registerForm" action="process_register.php" method="POST">

    <label for="firstName">First Name</label>
    <input type="text" id="firstName" name="first_name" required>

    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" name="last_name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="phoneNumber">Phone Number</label>
    <input type="tel" id="phoneNumber" name="phone_number" required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
<div class="password-section">
    <label for="N password">New Password</label>
    <input type="password" id="password" placeholder="Enter your New password">
    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
</div>
    <div class="password-section1">
      <label for="retype-password">Retype Password:</label>
      <input type="password" id="password" placeholder="Enter your Retype password">
      <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
</div>
    <button type="submit">Sign Up</button>
</form>
<div class="login-link">
    <p>Do you have an account? <a href="login.php">Login Here</a></p>
</div>
</div>

  
  <script src="../Assets/js/UpdateAccount.js"></script>
</body>
</html>
