<?php
//check loged in 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] !== "cashier") {
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}

//database connection
include("../Admin/Dashboard/db_con.php");

//fetch all cashiers
$email = $_SESSION['user_email'];
$sql = "SELECT * FROM customers WHERE userType = 'cashier' AND email = '".$email."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="./Assets/images/logo.png" rel="icon">
    <link href="./Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="./Assets/css/index.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <div class="menu">
            <div class="menu-header">
                <h1>Cashier Dashboard</h1>
            </div>

            <div class="menu-buttons">
                <button id="counter-button" class="menu-button" data-page="./counter.php">Counter</button>
                <button id="statistics-button" class="menu-button" data-page="./statistics.php">Statistics</button>
            </div>

            <div class="menu-profile">
                <div class="profile-image">
                    <img src="Assets/images/person.png" alt="Cashier Profile Picture">
                </div>
                <div class="profile-details">
                    <h3><?php echo $row['first_name']." ". $row['last_name'] ; ?></h3>
                    <input type="hidden" id="cashier-name" value="<?php echo $row['first_name']." ". $row['last_name']; ?>">
                    <a href="./logout.php"><button class="logout-button" >Logout</button></a>
                </div>
            </div>
        </div>

        <div class="content"></div>
    </div>
    <script src="./Assets/js/index.js"></script>
    <script src="./Assets/js/counter.js"></script>
    <script src="./Assets/js/repaymentsForm.js"></script>
</body>
</html>