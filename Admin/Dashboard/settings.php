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
include('db_con.php');

//Get the email from session
$email = $_SESSION['user_email'];

//retrieve all data of admin
$sql_admin = "SELECT * FROM customers WHERE email = '$email'";
$res_admin = mysqli_query($conn, $sql_admin);
$row_admin = mysqli_fetch_assoc($res_admin);

//update admin details
if(isset($_POST['edit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];

    $sql_update = "UPDATE customers SET first_name = '$first_name', last_name = '$last_name', phone_number = '$phone_number' WHERE email = '$email'";
    $res_update = mysqli_query($conn, $sql_update);

    if($res_update){
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Admin Details Updating successful!",
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
            <div class="profile-container">
                <h2>Admin Profile</h2>
                <!-- Profile Section -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="../Assets/images/profile_default.jpg" alt="Profile Picture">
                        <button onclick="openModal('updatePictureModal')"><i class="bi bi-camera-fill"></i></button>
                    </div>
                    <div class="profile-info">
                        <h3><?php echo $row_admin['first_name']. ' '. $row_admin['last_name']; ?></h3>
                        <p>Admin</p>
                    </div>
                </div>

                <!-- Personal Information Section -->
                <div class="personal-info">
                    <h4>Personal Information</h4>
                    <form action="" method="post">
                        <div class="info-fields">
                            <div class="left-fields">
                                <div class="field">
                                    <label for="first-name">First Name</label>
                                    <input type="text" name="first_name" value="<?php echo $row_admin['first_name']; ?>" id="first-name">
                                </div>
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?php echo $row_admin['email']; ?>" id="email" disabled>
                                </div>
                            </div>
                            <div class="right-fields">
                                <div class="field">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" name="last_name" value="<?php echo $row_admin['last_name']; ?>" id="last-name">
                                </div>
                                <div class="field">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone_number" value="<?php echo $row_admin['phone_number']; ?>" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="edit-button">
                            <button onclick="openModal('updateAdminModal')" name="edit" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Update Admin Modal -->
    <!--<div id="updateAdminModal" class="modal">
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
    </div>-->

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

    <!--Sweet alert js import-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/settings.js"></script>

</body>

</html>