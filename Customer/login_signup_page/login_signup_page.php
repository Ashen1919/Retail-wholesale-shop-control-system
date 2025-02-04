<?php

session_start();
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Register a user
if (isset($_POST['sign_btn'])) {
    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email_sign'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    //check the entered email is already exist
    $check_email = "SELECT email FROM customers WHERE email = '$email'";
    $res_email = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($res_email) > 0) {
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Email is already exist",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    } else {
        //hashed password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        //default values
        $def_profile_img = 'profile_default.jpg';
        $def_status = 'active';
        $def_cusType = 'retail';
        $def_userType = 'user';

        //Insert a new user
        $create_user_sql = "INSERT INTO customers(email, first_name, last_name, phone_number, password, image, status, customerType, userType) VALUES ('$email', '$first_name', '$last_name', '$phone', '$hashed_password', '$def_profile_img', '$def_status', '$def_cusType', '$$def_userType')";
        $res_user = mysqli_query($conn, $create_user_sql);

        if ($res_user) {
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Successfully signed up",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
        } else {
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
        }
    }

}

//Login a user
if (isset($_POST['login_btn'])) {
    $login_email = $_POST['email_login'];
    $login_pass = $_POST['pass_login'];
    //verify customer password
    $verify_pass_sql = "SELECT * FROM customers WHERE email = '" . $login_email . "'";
    $result_veri = mysqli_query($conn, $verify_pass_sql);

    if (mysqli_num_rows($result_veri) > 0) {
        $user = mysqli_fetch_assoc($result_veri);
        $hashed_password = $user['password'];
        $verify_password = password_verify($login_pass, $hashed_password);
        //check user type
        $customer = $user['userType'] == "user";
        $admin = $user['userType'] == "admin";
        $cashier = $user['userType'] == "cashier";

        if($verify_password && $customer){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $login_email;
            $_SESSION['user_type'] = $user['userType'];
            header("location:../../index.php");
        }else{
            $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Oops! Email or Password is incorrect",
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            </script>';
        }
        if($verify_password && $admin){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['userType'];
            $_SESSION['user_email'] = $login_email;
            header("location:../../Admin/Dashboard/index.php");
        }else{
            $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Oops! Email or Password is incorrect",
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            </script>';
        }
    }else{
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Oops! user not found",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }

}

//close connection
mysqli_close($conn);
?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php if (isset($message))
        echo $message; ?>
    <div class="back-btn">
        <a href="../../index.php"><button><i class="bi bi-arrow-left"></i>Back to Home</button></a>
    </div>
    <div class="container" id="container">
        <div class="sign-up">
            <form method="post">
                <h1>Sign Up</h1>
                <input type="text" name="fName" placeholder="First Name" required>
                <input type="text" name="lName" placeholder="Last Name" required>
                <input type="email" name="email_sign" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <input type="password" name="password" id="signupPwd" placeholder="Password" required>
                <i id="signupTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
                <button name="sign_btn">Sign Up</button>
            </form>
        </div>
        <div class="sign-in">
            <form method="post">
                <h1>Sign In</h1>
                <input type="email" name="email_login" placeholder="Enter your email" required>
                <input type="password" name="pass_login" id="signinPwd" placeholder="Enter your password" required>
                <i id="signinTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
                <a id="forgotPwd" href="#">Forgot Password?</a>
                <button name="login_btn">Sign In</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>