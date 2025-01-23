<?php 
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//register an user
if(isset($_POST['register_btn'])){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $userType = 'user';

    $add_sql = "INSERT INTO customers (email, first_name, last_name, phone_number, password, userType) VALUES ('$email', '$first_name', '$last_name', '$phone_number', '$password', '$userType')";
    $data = mysqli_query($conn, $add_sql);

    if($data){
        header("location:../../index.php");
    }
}
?>

<div id="registerFormModal" class="form-background modal-wrapper" style="display:none;">
    <div class="back">
        <button type="button" class="close-btn" onclick="closeModal()">X</button>
        <div class="background-image">
            <img src="./Customer/Assets/images/logo.png" alt="logo">
            <div class="shop-name">
                <h1>Sandaru Food</h1>
                <h1 id="mart">Mart</h1>
            </div>
            <div class="bch-img">
                <img src="./Customer/Assets/images/Register_page/Register background.png" alt="background">
            </div>
        </div>
        <div class="form-container">
            <h1>Register</h1>
            <form id="registerForm" action="" method="POST">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="first_name" placeholder="Enter your first name" required>

                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="last_name" placeholder="Enter your last name" required>

                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phone_number" placeholder="Enter your phone number" required>

                <div class="password-section">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
                </div>
                <div class="button">
                    <button type="submit" name="register_btn" >Sign Up</button>
                </div>
                <div class="login-link">
                    <p>Do you have an account? <a href="login.php">Login Here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>