

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

        <div class="right-side">
            <section>
                <h1> Cashier</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($res_all)) {
                            ?>
                            <tr>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['phone_number'] ?></td>
                                <td><img src="../../Customer/Assets/images/customers/<?php echo $row['image'] ?>"
                                        alt="User Image" style="width:50px; height:50px;"></td>
                                <td><?php echo $row['status'] ?></td>
                                <td>
                                    <div class="action">
                                        <a href="update_cashier.php?id=<?php echo $row['id']; ?>">
                                            <button class="edit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <a onclick="confirm ('Are you sure, Do you want to delete this cashier? ')"
                                            href="cashier.php?id=<?php echo $row['id'] ?>"><button class="delete"><i
                                                    class="bi bi-trash-fill"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </section>
            <button id="addCashierBtn" onclick="openModal('AddCashier')" class="add-btn">+ Add Cashier</button>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Add cashier -->
    <div id="AddCashier" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('AddCashier')">&times;</span>
            <h3>Add Cashier</h3>
            <form id="AddCashier" class="updateForm" method="post" action="">

                <div class="box">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" pattern="[A-Za-z]+"
                        title="Only alphabetic characters are allowed." required>
                </div>
                <div class="box">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" pattern="[A-Za-z]+"
                        title="Only alphabetic characters are allowed." required>
                </div>
                <div class="box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@example\.com"
                        title="Email must be in the format user@example.com" required>
                </div>
                <div class="box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="box">
                    <label for="num">Phone Number</label>
                    <input type="text" id="num" name="num" maxlength="10" pattern="[0-9]{10}"
                        title="Enter a valid NIC (e.g., 0712345678)" required>
                </div>

                <button type="submit">Add</button>
            </form>
        </div>
    </div>


    <!-- Update cashier -->
    <div id="updatePromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePromoModal')">&times;</span>
            <h3>Update Cashier</h3>
            <form id="addPromoForm">
                <label for="fname">First Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="lname">Last Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic" required>

                <label for="phone number">Phone Number:</label>
                <input type="text" id="phone number" name="phone number" required>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <button type="submit">Update</button>
            </form>
        </div>
    </div>

    <script src="../Assets/js/cashier.js"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>