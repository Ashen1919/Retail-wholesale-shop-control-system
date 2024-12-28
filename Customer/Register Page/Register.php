<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-container input,
        .form-container select,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .form-container .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .form-container .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        .form-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
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
