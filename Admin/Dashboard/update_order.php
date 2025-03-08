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

//database connection
include('./db_con.php');

$id = $_GET['id'];
$get_sql = "SELECT * FROM orders WHERE table_id = '$id'";
$res_get = mysqli_query($conn, $get_sql);
$row = mysqli_fetch_assoc($res_get);

//update status
if (isset($_POST['update'])) {
    $new_status = $_POST['order_status']; // Get selected status
    $update_sql = "UPDATE orders SET status = '$new_status' WHERE table_id = '$id'";

    if (mysqli_query($conn, $update_sql)) {
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Promotion is being updated",
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
    <link href="../Assets/css/order.css" rel="stylesheet">
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
        <div class="right-side" style="height:130vh;">
            <div class="heading">
                <h2 style="color:white; margin-bottom:20px;">Order Details</h2>
            </div>
            <!--Table Content-->
            <div class="category-table">
                <table>
                    <tbody>
                        <tr style="width:100%;">
                            <td style="width:30%; padding: 15px; text-align: center;">Order ID</td>
                            <td style="width:70%"><?php echo $row['id']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Name</td>
                            <td style="width:70%"><?php echo $row['name']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Date & Time</td>
                            <td style="width:70%"><?php echo $row['date']; ?> & <?php echo $row['time']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Address</td>
                            <td style="width:70%"><?php echo $row['address']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">City</td>
                            <td style="width:70%"><?php echo $row['city']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Postal Code</td>
                            <td style="width:70%"><?php echo $row['p_code']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Lending Amount</td>
                            <td style="width:70%">Rs. <?php echo $row['lending_amount']; ?>.00</td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Product Details & Quantities</td>
                            <td style="width:70%;"><?php echo $row['order_details']; ?></td>
                        </tr>
                        <tr style="width:100%">
                            <td style="width:30%; padding: 15px; text-align: center;">Update Status</td>
                            <td style="width:70%">
                                <form action="" method="post">
                                    <select name="order_status" id="">
                                        <option value="pending" <?php if ($row['status'] == 'pending')
                                            echo 'selected'; ?>>
                                            Pending</option>
                                        <option value="on-the-way" <?php if ($row['status'] == 'on-the-way')
                                            echo 'selected'; ?>>On-the-way</option>
                                        <option value="delivered" <?php if ($row['status'] == 'delivered')
                                            echo 'selected'; ?>>Delivered</option>
                                        <option value="cancelled" <?php if ($row['status'] == 'cancelled')
                                            echo 'selected'; ?>>Cancelled</option>
                                    </select>
                                    <form action="" method="post">
                                        <button name="update" class="update">Update</button>
                                    </form>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/promotion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>