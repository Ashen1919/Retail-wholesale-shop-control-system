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
    <link href="../Assets/css/lendings.css" rel="stylesheet">

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
            <!-- Total Lendings Section -->
            <div class="total-lendings">
                <div class="header">
                    <div class="search-bar">
                        <input type="search" name="search-lendings" placeholder="Search">
                        <button><i class="bi bi-search"></i></button>
                    </div>
                    <h3>Total Lendings</h3>
                    <button class="filter-button"><i class="bi bi-funnel"></i> Filter</button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>P. Number</th>
                            <th>Address</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>123456789V</td>
                            <td>+94 71 123 4567</td>
                            <td>123 Main Street, Colombo</td>
                            <td>Rs. 25,000</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>987654321V</td>
                            <td>+94 77 987 6543</td>
                            <td>456 High Street, Kandy</td>
                            <td>Rs. 45,500</td>
                        </tr>
                        <tr>
                            <td>Amal Perera</td>
                            <td>564738291V</td>
                            <td>+94 71 456 7890</td>
                            <td>789 Lake Road, Galle</td>
                            <td>Rs. 15,750</td>
                        </tr>
                        <tr>
                            <td>Kavindi Silva</td>
                            <td>345678912V</td>
                            <td>+94 75 345 6789</td>
                            <td>234 Hill Avenue, Jaffna</td>
                            <td>Rs. 32,000</td>
                        </tr>
                        <tr>
                            <td>Suresh De Silva</td>
                            <td>912345678V</td>
                            <td>+94 72 912 3456</td>
                            <td>567 Beach Road, Negombo</td>
                            <td>Rs. 60,000</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>123456789V</td>
                            <td>+94 71 123 4567</td>
                            <td>123 Main Street, Colombo</td>
                            <td>Rs. 25,000</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>987654321V</td>
                            <td>+94 77 987 6543</td>
                            <td>456 High Street, Kandy</td>
                            <td>Rs. 45,500</td>
                        </tr>
                        <tr>
                            <td>Amal Perera</td>
                            <td>564738291V</td>
                            <td>+94 71 456 7890</td>
                            <td>789 Lake Road, Galle</td>
                            <td>Rs. 15,750</td>
                        </tr>
                        <tr>
                            <td>Kavindi Silva</td>
                            <td>345678912V</td>
                            <td>+94 75 345 6789</td>
                            <td>234 Hill Avenue, Jaffna</td>
                            <td>Rs. 32,000</td>
                        </tr>
                        <tr>
                            <td>Suresh De Silva</td>
                            <td>912345678V</td>
                            <td>+94 72 912 3456</td>
                            <td>567 Beach Road, Negombo</td>
                            <td>Rs. 60,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Lower Section with Lendings and Repayments -->
            <div class="lower-section">
                <div class="lendings">
                    <div class="header">
                        <h4>Lendings</h4>
                        <div class="actions">
                            <button><i class="bi bi-search"></i></button>
                            <button><i class="bi bi-funnel"></i></button>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIC</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789V</td>
                                <td>2025-01-01</td>
                                <td>Rs. 12,000</td>
                            </tr>
                            <tr>
                                <td>987654321V</td>
                                <td>2025-01-02</td>
                                <td>Rs. 25,500</td>
                            </tr>
                            <tr>
                                <td>564738291V</td>
                                <td>2025-01-03</td>
                                <td>Rs. 18,750</td>
                            </tr>
                            <tr>
                                <td>345678912V</td>
                                <td>2025-01-04</td>
                                <td>Rs. 30,000</td>
                            </tr>
                            <tr>
                                <td>912345678V</td>
                                <td>2025-01-05</td>
                                <td>Rs. 50,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="repayments">
                    <div class="header">
                        <h4>Repayments</h4>
                        <div class="actions">
                            <button><i class="bi bi-search"></i></button>
                            <button><i class="bi bi-funnel"></i></button>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIC</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456789V</td>
                                <td>2025-01-01</td>
                                <td>Rs. 12,000</td>
                            </tr>
                            <tr>
                                <td>987654321V</td>
                                <td>2025-01-02</td>
                                <td>Rs. 25,500</td>
                            </tr>
                            <tr>
                                <td>564738291V</td>
                                <td>2025-01-03</td>
                                <td>Rs. 18,750</td>
                            </tr>
                            <tr>
                                <td>345678912V</td>
                                <td>2025-01-04</td>
                                <td>Rs. 30,000</td>
                            </tr>
                            <tr>
                                <td>912345678V</td>
                                <td>2025-01-05</td>
                                <td>Rs. 50,000</td>
                            </tr>
                            <tr>
                                <td>111222333V</td>
                                <td>2025-01-06</td>
                                <td>Rs. 20,000</td>
                            </tr>
                            <tr>
                                <td>444555666V</td>
                                <td>2025-01-07</td>
                                <td>Rs. 35,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <script src="../Assets/js/script.js"></script>

</body>

</html>