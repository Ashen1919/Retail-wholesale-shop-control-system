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
    <link href="../Assets/css/settings.css" rel="stylesheet">
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
            <div class="profile-container">
                <h2>Admin Profile</h2>
                <!-- Profile Section -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="../Assets/images/profile_default.jpg" alt="Profile Picture">
                        <button onclick="openModal('updatePictureModal')"><i class="bi bi-camera-fill"></i></button>
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
                        <button onclick="openModal('updateAdminModal')" class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Update Admin Modal -->
    <div id="updateAdminModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updateAdminModal')">&times;</span>
            <h3>Update Admin</h3>
            <form id="updateAdminForm" class="updateForm">
                <div class="box">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" pattern="[A-Za-z]+"
                        title="Only alphabetic characters are allowed.">
                </div>
                <div class="box">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" pattern="[A-Za-z]+"
                        title="Only alphabetic characters are allowed.">
                </div>
                <div class="box">
                    <label for="nic">NIC</label>
                    <input type="text" id="nic" name="nic" maxlength="12" pattern="[0-9]{9}[vVxX]|[0-9]{12}"
                        title="Enter a valid NIC (e.g., 123456789V or 200012345678)">
                </div>
                <div class="box">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" pattern="\d{4}-\d{2}-\d{2}"
                        title="Enter a valid date (e.g., 1990-12-31)">
                </div>
                <div class="box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@example\.com"
                        title="Email must be in the format user@example.com">
                </div>
                <div class="box">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" inputmode="numeric">
                </div>
                <div class="box">
                    <label for="address">Address</label>
                    <textarea type="text" id="address" name="address" rows="4" autocomplete="address-line1"></textarea>
                </div>
                <div class="box">
                    <label for="postal-code">Postal Code</label>
                    <input type="number" id="postal-code" name="postal-code" maxlength="5">
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>

    <!-- Update Profile Picture Modal -->
    <div id="updatePictureModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePictureModal')">&times;</span>
            <h3>Update Profile Picture</h3>
            <form id="updatePictureForm">
                <label for="profilePicture"></label>
                <input type="file" id="profilePicture" name="profilePicture" accept="image/*"
                    onchange="previewImage(event)" required>

                <div id="imagePreviewContainer" style="display: none;">
                    <img id="imagePreview" src="" alt="Image Preview" />
                </div>

                <button type="submit">Upload</button>
            </form>
        </div>
    </div>

    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/settings.js"></script>

</body>

</html>