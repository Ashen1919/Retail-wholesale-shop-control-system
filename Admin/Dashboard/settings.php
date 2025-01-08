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
    <link href="../Assets/css/settings.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <!--Top Bar-->
    <div class="top-bar">
        <div class="left">
            <div class="search-bar">
                <input type="search" name="search" id="search" placeholder="Search">
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
            <div class="profile-container">
                <h2>Admin Profile</h2>
                <!-- Profile Section -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="../Assets/images/profile_default.jpg" alt="Profile Picture">
                        <button><i class="bi bi-camera-fill"></i></button>
                    </div>
                    <div class="profile-info">
                        <h3>Full Name</h3>
                        <p>Admin</p>
                    </div>
                </div>

                <!-- Personal Information Section -->
                <div class="personal-info">
                    <h4>Personal Information</h4>
                    <div class="info-fields">
                        <div class="left-fields">
                            <div class="field">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" disabled>
                            </div>
                            <div class="field">
                                <label for="nic">NIC</label>
                                <input type="text" id="nic" disabled>
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="text" id="email" disabled>
                            </div>
                            <div class="field">
                                <label for="address">Address</label>
                                <input type="text" id="address" disabled>
                            </div>
                        </div>
                        <div class="right-fields">
                            <div class="field">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" disabled>
                            </div>
                            <div class="field">
                                <label for="dob">Date of Birth</label>
                                <input type="text" id="dob" disabled>
                            </div>
                            <div class="field">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" disabled>
                            </div>
                            <div class="field">
                                <label for="postal-code">Postal Code</label>
                                <input type="text" id="postal-code" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="edit-button">
                        <button class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <script src="../Assets/js/script.js"></script>

</body>

</html>