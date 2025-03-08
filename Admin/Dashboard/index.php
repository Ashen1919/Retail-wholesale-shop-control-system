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

//database connection
include('db_con.php');

//Today overview section
$today_date = date("Y-m-d");

//orders count
$today_order_sql = "SELECT COUNT(*) AS order_count FROM orders WHERE date = '$today_date'";
$res_order_today = mysqli_query($conn, $today_order_sql);
$row_today = mysqli_fetch_assoc($res_order_today);
$order_count = $row_today['order_count'];

//customers count
$today_customer_sql = "SELECT COUNT(*) AS customer_count FROM customers WHERE date = '$today_date'";
$res_customer_today = mysqli_query($conn, $today_customer_sql);
$row_today = mysqli_fetch_assoc($res_customer_today);
$customer_count = $row_today['customer_count'];

//today earnings
$today_earning_sql = "SELECT SUM(full_amount) AS total_earning FROM orders WHERE date = '$today_date'";
$res_earning_today = mysqli_query($conn, $today_earning_sql);
$row_earning_today = mysqli_fetch_assoc($res_earning_today);
$today_earning = $row_earning_today['total_earning'] ?? 0;

//Total overview section
//orders count
$total_order_sql = "SELECT COUNT(*) AS order_count FROM orders";
$res_order_total = mysqli_query($conn, $total_order_sql);
$row_total = mysqli_fetch_assoc($res_order_total);
$order_count_total = $row_total['order_count'];

//customers count
$total_customer_sql = "SELECT COUNT(*) AS customer_count FROM customers";
$res_customer_total = mysqli_query($conn, $total_customer_sql);
$row_total_cus = mysqli_fetch_assoc($res_customer_total);
$customer_count_total = $row_total_cus['customer_count'];

//today earnings
$total_earning_sql = "SELECT SUM(full_amount) AS total_earning FROM orders";
$res_earning_total = mysqli_query($conn, $total_earning_sql);
$row_earning_total = mysqli_fetch_assoc($res_earning_total);
$total_earning = $row_earning_total['total_earning'] ?? 0;
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
        <div class="right-side">
            <div class="main-body">
                <h2 style="color:white; margin-bottom:20px;">Dashboard </h2>
                <div class="content">
                    <div class="left-side-dash">
                        <h4 style="color:white; margin-bottom:15px;">Today Overview</h4>
                        <div class="dash-cards">
                            <div class="card-1">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Earnings</h5>
                                <i class="bi bi-cash"></i>
                                <p class="value"><?php echo $today_earning ?></p>
                            </div>
                            <div class="card-2">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Orders</h5>
                                <i class="bi bi-basket2-fill"></i>
                                <p class="value"><?php echo $order_count ?></p>
                            </div>
                            <div class="card-3">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Customers</h5>
                                <i class="bi bi-people-fill"></i>
                                <p class="value"><?php echo $customer_count ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="right-side-dash">
                        <h4 style="color:white; margin-bottom:15px;">Total Overview</h4>
                        <div class="dash-cards">
                            <div class="card-1">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Earnings</h5>
                                <i class="bi bi-cash"></i>
                                <p class="value"><?php echo $total_earning ?></p>
                            </div>
                            <div class="card-2">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Orders</h5>
                                <i class="bi bi-basket2-fill"></i>
                                <p class="value"><?php echo $order_count_total ?></p>
                            </div>
                            <div class="card-3">
                                <h5
                                    style="margin-top:1.5rem; justify-content:center; display:flex; font-weight:500; color:white;">
                                    Customers</h5>
                                <i class="bi bi-people-fill"></i>
                                <p class="value"><?php echo $customer_count_total ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-section">
                    <div class="bar-chart">
                        <div class="chart-head">
                            <h3 style="color: white; margin-bottom: 15px">Total Profit per week</h3>
                            <div class="report-btn">
                                <a href="#">Get Report<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="bar-chart-card">
                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>
                    <div class="pie-chart">
                        <div class="chart-head">
                            <h3 style="color: white; margin-bottom: 15px">Sales By Category</h3>
                            <div class="report-btn">
                                <a href="#">Get Report<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="pie-chart-card">
                            <canvas class="canvas-pie" style="width:100%;max-width:360px height:100%; max-height:360px;"
                                id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>
                <!--Top selling section-->
                <div class="top-selling">
                    <h3 style="color: white; margin-bottom: 15px">Top Selling</h3>
                    <div class="table-section">
                        <table class="table-top">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Sold</th>
                                    <th>Total Earning</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nadu Rice 5Kg</td>
                                    <td>1,500</td>
                                    <td>In Stock</td>
                                    <td>200</td>
                                    <td>300,000</td>
                                </tr>
                                <tr>
                                    <td>Dhal 1Kg</td>
                                    <td>340</td>
                                    <td>In Stock</td>
                                    <td>155</td>
                                    <td>52,700</td>
                                </tr>
                                <tr>
                                    <td>Sugar 1Kg</td>
                                    <td>400</td>
                                    <td>Low Stock</td>
                                    <td>100</td>
                                    <td>40,000</td>
                                </tr>
                                <tr>
                                    <td>Samba Rice 10Kg</td>
                                    <td>2,500</td>
                                    <td>In Stock</td>
                                    <td>95</td>
                                    <td>161,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../Assets/js/bar-chart.js"></script>
    <script src="../Assets/js/pie-charts.js"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>