<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="../Assets/css/login_signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="container">
        <div class="sign-up">
            <form>
                <h1>Sign Up</h1>
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Phone Number">
                <input type="password" id="signupPwd" placeholder="Password">
                <i id="signupTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="sign-in">
            <form>
                <h1>Sign In</h1>
                <input type="email" placeholder="Enter your email">
                <input type="password" id="signinPwd" placeholder="Enter your password">
                <i id="signinTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
                <a id="forgotPwd" href="#">Forgot Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="../Assets/images/logo.png" alt="logo">
                    <div class="shop-name">
                        <h1>Sandaru Food</h1>
                        <h1 id="mart">Mart<h1>
                    </div>
                    <div class="cart">
                        <img src="../Assets/images/Register_page/Register background.png" alt="cart">
                    </div>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                <img src="../Assets/images/logo.png" alt="logo">
                    <div class="shop-name">
                        <h1>Sandaru Food</h1>
                        <h1 id="mart">Mart<h1>
                    </div>
                    <div class="cart">
                        <img src="../Assets/images/Register_page/Register background.png" alt="cart">
                    </div>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../Assets/js/login_signup.js"></script>
</body>

</html>
