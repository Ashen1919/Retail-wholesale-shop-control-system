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
include('db_con.php');

// Fetch category data
$c_id = $_GET['id'];
$get_sql = "SELECT * FROM categories WHERE id = '$c_id'";
$query = mysqli_query($conn, $get_sql);
$row = mysqli_fetch_assoc($query);

// Update category
if (isset($_POST['update_btn'])) {
    $c_name = $_POST['name'];
    $c_description = $_POST['categoryDescription'];

    $image_name = $_FILES['categoryImage']['name'];

    if ($image_name) {
        $tmp = explode(".", $image_name);
        $newFileName = round(microtime(true)) . '.' . end($tmp);
        $uploadPath = "../Assets/images/categories/" . $newFileName;
        move_uploaded_file($_FILES['categoryImage']["tmp_name"], $uploadPath);

        $update_sql = "UPDATE categories SET name = '$c_name', description = '$c_description', image = '$newFileName' WHERE id = '$c_id'";
        $data = mysqli_query($conn, $update_sql);

        if ($data) {
            header("location:categories.php");
        }
    } else {
        $update_sql = "UPDATE categories SET name = '$c_name', description = '$c_description' WHERE id = '$c_id'";
        $data = mysqli_query($conn, $update_sql);

        if ($data) {
            header("location:categories.php");
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Category is being updated",
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
    <link href="../Assets/css/categorie.css" rel="stylesheet">
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
        <div class="right-side-category">
            <h2 style="color:white; margin-bottom:20px;">Update Category</h2>
            <!-- Update Promo Modal -->
            <div id="updatePromoModal" class="modal_update">
                <div class="modal-content">
                    <form id="addPromoForm" action="" method="post" enctype="multipart/form-data">

                        <label for="name">Category Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" required>

                        <label for="categoryDescription">Description:</label>
                        <textarea id="categoryDescription"
                            name="categoryDescription"><?php echo htmlspecialchars($row['description']); ?></textarea>

                        <label for="categoryImage">Image:</label>
                        <input type="file" id="categoryImage" name="categoryImage" accept="image/*">

                        <img src="../Assets/images/categories/<?php echo $row['image'] ?>" alt="Category image"
                            style="width:70px;">

                        <button type="submit" style="justify-content:center;" name="update_btn">Update Category</button>
                    </form>
                </div>
            </div>
        </div>

        <!--Sweet alert js import-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>