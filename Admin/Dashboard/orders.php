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
            <div class="heading">
                <h2 style="color:white; margin-bottom:20px;">Order Management</h2>
                <div class="date">
                    <label for="date" style="color:white;">Filter by Date:</label>
                    <input type="date" name="date" id="date">
                </div>
            </div>

            <!--Table Content-->
            <div class="category-table">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Email</th>
                            <th>Order Date</th>
                            <th>Order Type</th>
                            <th>Order Status</th>
                            <th>Total Amount</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>ashengimhana58@gmail.com</td>
                            <td>19/01/2025</td>
                            <td>Online</td>
                            <td>In-progress</td>
                            <td>2,570</td>
                            <td>NO:222,Nedungolla,Mandawala</td>
                            <td>
                                <div class="action">
                                    <button onclick="openModal('updatePromoModal')" class="edit"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Update Promo Modal -->
    <div id="updatePromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePromoModal')">&times;</span>
            <h3>Update Order Status</h3>
            <form id="addPromoForm">

                <label for="name" style="margin-top:5px;">Order Status:</label>
                <select name="type" id="type">
                    <option value="select one...">Select One...</option>
                    <option value="in-progress">In-progress</option>
                    <option value="ready-to-ship">Ready to ship</option>
                    <option value="delivered">Delivered</option>
                    <option value="canceled">Canceled</option>
                </select>

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/promotion.js"></script>
</body>

</html>