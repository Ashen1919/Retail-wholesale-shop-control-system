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
    <link href="../Assets/css/Register.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="form-container">
        <h1>Register</h1>
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

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Do you have an account? <a href="login.php">Login Here</a></p>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
