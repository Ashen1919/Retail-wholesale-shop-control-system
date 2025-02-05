<?php

//check loged in 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] !== "admin") {
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}
include('db_con.php');

// Fetch category data
$c_id = $_GET['id'];
$get_sql = "SELECT * FROM customers WHERE id = '$c_id'";
$query = mysqli_query($conn, $get_sql);
$row = mysqli_fetch_assoc($query);

// Update category
if(isset($_POST['submit'])){
    $fName = $_POST['first-name'];
    $lName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['num'];

    $upd_sql = "UPDATE customers SET first_name = '".$fName."', last_name = '".$lName."', email = '".$email."', phone_number = '".$phone."' WHERE id = '$c_id'";
    $upd_res = mysqli_query($conn, $upd_sql);

    if($upd_res){
        header("location:cashier.php");
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Cashier adding successful",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }else{
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

    <!-- Css Stylesheets -->
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="../Assets/css/cashier.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <?php if (isset($message))
        echo $message; ?>
    <!--Top Bar-->
    <div class="top-bar">
        <div class="left">
            <div class="search-bar">
                <input type="search" name="search" id="search" style="color: black;" placeholder="Search">
                <button><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="right">
            <div class="profile">
                <img src="../Assets/images/profile_default.jpg" alt="Default profile" class="pro-avatar">
                <p>Admin</p>
            </div>
            <div class="log-out">
                <a href="../logout.php" style="text-decoration:none;">
                    <button class="logout-button">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </a>
            </div>

        </div>
    </div>
    <!--End of top Bar-->

    <!--Main body-->
    <div class="main-content">
        <!--Left side-->
        <div class="left-side">
            <div class="title">
                <p>Admin Dashboard</p>
            </div>
            <a href="index.php">
                <div class="dashboard">
                    <i class="bi bi-house-door"></i>Dashboard
                </div>
            </a>
            <a href="categories.php">
                <div class="dashboard">
                    <i class="bi bi-bookmark"></i>Categories
                </div>
            </a>
            <a href="products.php">
                <div class="dashboard">
                    <i class="bi bi-basket2"></i>Products/Items
                </div>
            </a>
            <a href="customers.php">
                <div class="dashboard">
                    <i class="bi bi-people"></i>Customers
                </div>
            </a>
            <a href="orders.php">
                <div class="dashboard">
                    <i class="bi bi-cart4"></i>Order Management
                </div>
            </a>
            <a href="reviews.php">
                <div class="dashboard">
                    <i class="bi bi-star-half"></i>Reviews
                </div>
            </a>
            <a href="contact.php">
                <div class="dashboard">
                    <i class="bi bi-telephone"></i>Contact
                </div>
            </a>
            <a href="lendings.php">
                <div class="dashboard">
                    <i class="bi bi-cash-stack"></i>Lendings
                </div>
            </a>
            <a href="cashier.php">
                <div class="dashboard">
                    <i class="bi bi-person"></i>Cashier
                </div>
            </a>
            <a href="promotion.php">
                <div class="dashboard">
                    <i class="bi bi-percent"></i>Promotions
                </div>
            </a>
            <a href="settings.php">
                <div class="dashboard">
                    <i class="bi bi-gear-wide-connected"></i>Settings
                </div>
            </a>

        </div>
        <!--End of left side-->

        <!--Right side-->
        <div class="right-side-cashier">
            <h2 style="color:white; margin-bottom:20px;">Update Cashier</h2>
            <!-- Update Promo Modal -->
            <div  class="modal_update">
                <div class="modal-content">
                    <form id="AddCashier" class="updateForm" method="post" action="">

                        <div class="box">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name" pattern="[A-Za-z]+"
                                title="Only alphabetic characters are allowed." value="<?php echo $row['first_name']; ?>" >
                        </div>
                        <div class="box">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name" pattern="[A-Za-z]+"
                                title="Only alphabetic characters are allowed." value="<?php echo $row['last_name']; ?>">
                        </div>
                        <div class="box">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@example\.com"
                                title="Email must be in the format user@example.com" value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="box">
                            <label for="num">Phone Number</label>
                            <input type="text" id="num" name="num" maxlength="10" pattern="[0-9]{10}"
                                title="Enter a valid NIC (e.g., 0712345678)" value="<?php echo $row['phone_number']; ?>">
                        </div>

                        <button type="submit" name="submit">Update Cashier</button>
                    </form>
                </div>
            </div>
        </div>

        <!--Sweet alert js import-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>