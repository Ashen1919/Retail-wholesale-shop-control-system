<?php

//check loged in 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] !== "admin"){
    header("location:../../Customer/login_signup_page/login_signup_page.php");
    exit();
}
//Databas connection
include('db_con.php');

//Fetch All Feedbacks
$sql_feed = "SELECT * FROM reviews ORDER BY review_id DESC";
$result_feed = mysqli_query($conn, $sql_feed);

//Review status update
if (isset($_POST['accept'])) {
    $review_id = $_POST['review_id'];
    $sql_update = "UPDATE reviews SET status = 'Accepted' WHERE review_id = '$review_id'";
    if (mysqli_query($conn, $sql_update)) {
        header("location:reviews.php");
        exit();
    }
}

if (isset($_POST['reject'])) {
    $review_id = $_POST['review_id'];
    $sql_update = "UPDATE reviews SET status = 'Rejected' WHERE review_id = '$review_id'";
    if (mysqli_query($conn, $sql_update)) {
        header("location:reviews.php");
        exit();
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
    <link href="../Assets/css/reviews.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
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
                <button class="logout-button">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
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
        <div class="right-side">
            <h2 style="color: white; margin-bottom: 20px">Reviews</h2>
            <div class="customer-content">
                <div class="category-table">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Occupation</th>
                                <th>Ratings</th>
                                <th>Feedback</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_feed)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['review_id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['occupation'] ?></td>
                                    <td><?php echo $row['rating'] ?></td>
                                    <td><?php echo $row['feedback'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td style="padding:6px;"><img
                                            src="../../Customer/Assets/images/feedback/<?php echo $row['image'] ?>"
                                            alt="User Image" style="width:60px; height:60px;"></td>
                                    <td>
                                        <div class="action">
                                            <form action="reviews.php" method="post">
                                                <input type="hidden" name="review_id" value="<?php echo $row['review_id']; ?>">
                                                <button class="edit" name="accept">Accept</button>
                                                <button class="delete" name="reject">Reject</i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!--Sweet alert js import-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Assets/js/script.js"></script>

</body>

</html>