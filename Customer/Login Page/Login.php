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
   
    <link href="../Assets/css/Login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="form-background">

    <img src="../Assets/images/logo.png" alt="logo">


        <div class="form-container">


        <form> 
        
<h1>Login</h1>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your Email" required>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password"require>   
                    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
            
            <a id="fp" href="#">Forgot Password?</a><br>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account?<a href="#">Sign up now</a></p>
    </div>
</div>
    
    <script src="../Assets/js/login.js"></script>
</body>
</html>