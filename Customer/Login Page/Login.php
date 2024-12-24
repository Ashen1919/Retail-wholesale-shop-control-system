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
    <link href="../Assets/css/Login style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <form action="">
    <h1>Log In</h1>
            <i class='bx bxs-envelope'></i>
            <label for="email">Email</label>
            <div class="input-box">
           <input type="email" id="email" placeholder="Enter your email" required>       
        </div>
            <i class='bx bxs-lock-alt'></i>
            <label for="password">Password</label>
            <div class="input-box">
            <input type="password" id="password" placeholder="Enter your password" required>
            </div>

        <div class="remrmber-forgot">
        <a href="#" class="forgot-password">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>
        
    </form>
    <p class="signup-text">
        Don't have an account? <a href="#">Sign up now</a>
    </p>

</div>

</body>
</html>