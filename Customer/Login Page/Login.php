<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/Login.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="form-background">
        <div class="background-image">
            <img src="../Assets/images/logo.png" alt="logo">
            <div class="shop-name">
                <h1>Sandaru Food</h1>
                <h1 id="mart">Mart<h1>
            </div>
            <div class="bch-img">
                <img src="../Assets/images/Register_page/Register background.png" alt="logo">
            </div>
        </div>
        <div class="form-container">
            <form>
                <h1>Login</h1>

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your Email" required>
                <div class="password-section">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
                </div>

                <a id="fp" href="#">Forgot Password?</a><br>

                <button type="submit">Login</button>

                <p>Don't have an account?<a href="#">Sign up now</a></p>
            </form>
           
        </div>
    </div>

    <script src="../Assets/js/login.js"></script>
</body>

</html>