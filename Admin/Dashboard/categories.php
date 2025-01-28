<?php

include("db_con.php");

//Add a category
if (isset($_POST['add_btn'])) {
    $name = $_POST['name'];
    $description = $_POST['categoryDescription'];

    $image_name = $_FILES['categoryImage']['name'];
    $tmp = explode(".", $image_name);
    $newFileName = round(microtime(true)) . '.' . end($tmp);
    $uploadPath = "../Assets/images/categories/" . $newFileName;

    if (move_uploaded_file($_FILES['categoryImage']["tmp_name"], $uploadPath)) {

        $sql = "INSERT INTO categories(name, description, image) VALUES ('$name', '$description', '$newFileName')";
        $data = mysqli_query($conn, $sql);

        if ($data) {
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Category is being added",
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

//Display all categories
$sql_display = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql_display);

//delete category
if (isset($_GET['id'])) {
    $c_id = $_GET['id'];

    $del_sql = "DELETE FROM categories WHERE id = '$c_id'";
    $data = mysqli_query($conn, $del_sql);

    if ($data) {
        header("location:categories.php");
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Category is being deleted",
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
    <?php if (isset($message)) echo $message; ?>
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
            <h2 style="color:white; margin-bottom:20px;">Categories</h2>
            <div class="category-table">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['description']; ?> </td>
                                <td><img src="../Assets/images/categories/<?php echo $row['image']; ?>"
                                        alt="Category Image"></td>
                                <td>
                                    <div class="action">
                                        <a href="update_category.php?id=<?php echo $row['id']; ?>">
                                            <button class="edit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <a onclick="confirm ('Are you sure, Do you want to delete this category? ')"
                                            href="categories.php?id=<?php echo $row['id'] ?>"><button class="delete"><i
                                                    class="bi bi-trash-fill"></i></button></a>
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
                Add Category
            </button>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Add Promo Modal -->
    <div id="addPromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addPromoModal')">&times;</span>
            <h3>Add Category</h3>
            <form id="addPromoForm" action="categories.php" method="post" enctype="multipart/form-data">

                <div class="success" id="success"
                    style="display: <?php echo (isset($message) && $message == 'success') ? 'block' : 'none'; ?>;">
                    <span class="close_popup" onclick="closeModal('success')">&times;</span>
                    <p>Category Added Successfully!</p>
                </div>

                <div class="fail" id="fail"
                    style="display: <?php echo (isset($message) && $message == 'fail') ? 'block' : 'none'; ?>;">
                    <span class="close_popup" onclick="closeModal('fail')">&times;</span>
                    <p>Failed to add category!</p>
                </div>

                <label for="name">Category Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="categoryDescription">Description:</label>
                <textarea id="categoryDescription" name="categoryDescription" required></textarea>

                <label for="categoryImage">Image:</label>
                <input type="file" id="categoryImage" name="categoryImage" accept="image/*" required>

                <button type="submit" name="add_btn">Add Category</button>
            </form>
        </div>
    </div>

    <!--Sweet alert js import-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/category.js"></script>

</body>

</html>