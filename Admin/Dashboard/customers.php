<?php
//Database connection
include('db_con.php');

//Fetch all customer's details
$sql_cus = "SELECT * FROM customers";
$result_cus = mysqli_query($conn, $sql_cus);
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
    <link href="../Assets/css/customer.css" rel="stylesheet">
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
            <div class="customer-content">
                <h2 style="color:white; margin-bottom:20px;">Customer Management </h2>
                <div class="category-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_cus)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['first_name'] ?></td>
                                    <td><?php echo $row['last_name'] ?></td>
                                    <td><?php echo $row['phone_number'] ?></td>
                                    <td><img src="../../Customer/Assets/images/customers/<?php echo $row['image'] ?>" alt="User Image" style="width:50px; height:50px;"></td>
                                    <td>
                                        <div class="action">
                                            <button class="edit"><i class="bi bi-pencil-square"></i></button>
                                            <button class="delete"><i class="bi bi-trash-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <button onclick="openModal('addPromoModal')">
                    <i class="bi bi-plus fs-3"></i>
                    Add Customer
                </button>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Add Promo Modal -->
    <div id="addPromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addPromoModal')">&times;</span>
            <h3>Add Customer</h3>
            <form id="addPromoForm">
                <label for="catID">Email:</label>
                <input type="text" id="catID" name="catID" required>

                <label for="name">First Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">Last Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">Phone Number:</label>
                <input type="text" id="name" name="name" required>

                <button type="submit">Add Category</button>
            </form>
        </div>
    </div>

    <!-- Update Promo Modal -->
    <div id="updatePromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePromoModal')">&times;</span>
            <h3>Update Category</h3>
            <form id="addPromoForm">
                <label for="catID">Email:</label>
                <input type="text" id="catID" name="catID" required>

                <label for="name">First Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">Last Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">Phone Number:</label>
                <input type="text" id="name" name="name" required>

                <button type="submit">Update Category</button>
            </form>
        </div>
    </div>

    <script src="../Assets/js/promotion.js"></script>
    <script src="../Assets/js/script.js"></script>

</body>

</html>