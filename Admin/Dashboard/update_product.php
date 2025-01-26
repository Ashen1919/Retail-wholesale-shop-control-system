<?php
include('db_con.php');

$sql_name = "SELECT name FROM categories";
$result_name = mysqli_query($conn, $sql_name);

// Fetch category data
$p_id = $_GET['id'];
$get_sql = "SELECT * FROM products WHERE id = '$p_id'";
$query = mysqli_query($conn, $get_sql);
$row = mysqli_fetch_assoc($query);

// Update product
if (isset($_POST['update_btn'])) {
    $pd_id = $_POST['proID'];
    $p_name = $_POST['name'];
    $p_category = $_POST['category'];
    $p_quantity = $_POST['quantity'];
    $p_supplier = $_POST['supplier'];
    $p_purPrice = $_POST['purPrice'];
    $p_retPrice = $_POST['retPrice'];
    $p_retProfit = $_POST['retProfit'];
    $p_whoPrice = $_POST['whoPrice'];
    $p_whoProfit = $_POST['whoProfit'];
    $p_description = $_POST['categoryDescription'];

    $image_name = $_FILES['productImage']['name'];

    if ($image_name) {
        $tmp = explode(".", $image_name);
        $newFileName = round(microtime(true)) . '.' . end($tmp);
        $uploadPath = "../Assets/images/products/" . $newFileName;
        move_uploaded_file($_FILES['productImage']["tmp_name"], $uploadPath);

        $update_sql = "UPDATE products SET product_name = '$p_name', product_category = '$p_category', quantity = '$p_quantity', supplier = '$p_supplier', image = '$newFileName', description = '$p_description', purchased_price = '$p_purPrice', retail_price = '$p_retPrice', retail_profit = '$p_retProfit', whole_price = '$p_whoPrice', whole_profit = '$p_whoProfit' WHERE product_id = '$pd_id'";
        $data = mysqli_query($conn, $update_sql);

        if ($data) {
            header("location:products.php");
        }
    } else {
        $update_sql = "UPDATE products SET product_name = '$p_name', product_category = '$p_category', quantity = '$p_quantity', supplier = '$p_supplier', description = '$p_description', purchased_price = '$p_purPrice', retail_price = '$p_retPrice', retail_profit = '$p_retProfit', whole_price = '$p_whoPrice', whole_profit = '$p_whoProfit' WHERE product_id = '$pd_id'";
        $data = mysqli_query($conn, $update_sql);

        if ($data) {
            header("location:products.php");
        }
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
    <link href="../Assets/css/products.css" rel="stylesheet">
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
        <div class="right-side-product">
            <h2 style="color:white; margin-bottom:20px;">Update Product</h2>
            <!-- Update Promo Modal -->
            <div id="updatePromoModal" class="modal_update">
                <div class="modal-content_update">
                    <form id="addPromoForm" action="" method="post" enctype="multipart/form-data">
                        <div class="full-row">
                            <div class="head-row">
                                <div class="left-row">
                                    <label for="proID">Product ID:</label>
                                    <input type="text" id="proID" name="proID" value="<?php echo $row['product_id']; ?>"
                                        required readonly />

                                    <label for="name">Product Name:</label>
                                    <input type="text" id="name" name="name"
                                        value="<?php echo $row['product_name']; ?>" />

                                    <label style="margin-top: 3px" for="category">Product Category:</label>
                                    <select name="category" id="Category" >
                                        <option value="" disabled selected><?php echo $row['product_category']; ?>
                                        </option>
                                        <?php
                                        while ($rows = mysqli_fetch_assoc($result_name)) {
                                            ?>
                                            <option value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                    <label style="margin-top: 9px" for="quantity">Product Quantity:</label>
                                    <input type="text" id="quantity" name="quantity"
                                        value="<?php echo $row['quantity']; ?>" />

                                    <label for="supplier">Supplier:</label>
                                    <input type="text" id="supplier" name="supplier"
                                        value="<?php echo $row['supplier']; ?>" />

                                    <label for="productImage">Image:</label>
                                    <input type="file" id="productImage" name="productImage" accept="image/*"
                                        value="" />
                                </div>
                                <div class="right-row">
                                    <label for="purPrice">Purchased Price:</label>
                                    <input type="text" id="purPrice" name="purPrice"
                                        value="<?php echo $row['purchased_price']; ?>" />

                                    <label for="retPrice">Retail Price:</label>
                                    <input type="text" id="retPrice" name="retPrice"
                                        value="<?php echo $row['retail_price']; ?>" />

                                    <label for="retProfit">Retail Profit:</label>
                                    <input type="text" id="retProfit" name="retProfit"
                                        value="<?php echo $row['retail_profit']; ?>" />

                                    <label for="whoPrice">Wholesale Price:</label>
                                    <input type="text" id="whoPrice" name="whoPrice"
                                        value="<?php echo $row['whole_price']; ?>" />

                                    <label for="whoProfit">Wholesale Profit:</label>
                                    <input type="text" id="whoProfit" name="whoProfit"
                                        value="<?php echo $row['whole_profit']; ?>" />
                                </div>
                            </div>
                            <div class="bottom-row">
                                <label for="categoryDescription">Description:</label>
                                <textarea id="categoryDescription"
                                    name="categoryDescription"><?php echo $row['description']; ?></textarea>

                                <button class="addPro" name="update_btn" style="justify-content:center;"
                                    type="submit">Update
                                    Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>