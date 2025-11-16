<?php
session_start();

error_reporting(0);

//Database connection
$conn = mysqli_connect("sql300.infinityfree.com", "if0_40430873", "5AtOP4p1s1Rm1", "if0_40430873_FoodmartDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Default to first product if no ID provided
$product_id = isset($_GET['id']) ? $_GET['id'] : 'P-00001';

// Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
$stmt->bind_param("s", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    // Handle product not found
    header("Location: 404.php");
    exit();
}

//add to cart 
if (isset($_POST['addCartBtn'])) {
    $email = $_SESSION['user_email'];
    if ($email) {
        //check exist product in table
        $check_product = "SELECT product_id FROM cart WHERE product_id = '$product_id' AND email = '$email'";
        $result_pro = mysqli_query($conn, $check_product);

        if (mysqli_num_rows($result_pro) > 0) {
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "This product is already in the cart",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
        } else {
            $add_sql = "INSERT INTO cart(email, product_id) VALUES('$email', '$product_id') ";
            $res_add = mysqli_query($conn, $add_sql);

            if ($res_add) {
                $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Successfully added to cart",
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
                    title: "Oops! something went wrong.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
            </script>';
            }
        }
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
            myModal.show();
        });
      </script>";

    }
}

//features product section
$category_sql = "SELECT product_category FROM products WHERE product_id = '$product_id'";
$category_res = mysqli_query($conn, $category_sql);
$res_cat = mysqli_fetch_assoc($category_res);
$category = $res_cat['product_category'];

$features_sql = "SELECT * FROM products WHERE product_category = '$category' AND product_id != '$product_id' LIMIT 3 ";
$features_res = mysqli_query($conn, $features_sql);

// Close statement and connection
$stmt->close();
$conn->close();

// Format price with commas for thousands
function formatPrice($price)
{
    return number_format($price, 2, '.', ',');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['product_name']); ?> - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="../Assets/css/cart_style.css" rel="stylesheet">

</head>

<body>
    <?php if (isset($message))
        echo $message; ?>

    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <!-- Product view section -->
    <div class="product_view">
        <div class="product-page">

            <div class="product-image">
                <div class="col"></div>
                <div class="slider"></div>
                <img src="../../Admin/Assets/images/products/<?php echo htmlspecialchars($product['image']); ?>"
                    alt="<?php echo htmlspecialchars($product['product_name']); ?>">
            </div>

            <div class="product-details">

                <h1><?php echo htmlspecialchars($product['product_name']); ?></h1>
                <h6>Brand: &nbsp; <?php echo htmlspecialchars($product['supplier']); ?></h6>
                <div class="units"><?php echo htmlspecialchars($product['units']); ?></div>
                <div class="price">Rs. <?php echo formatPrice($product['retail_price']); ?></div>
                </br>
                <div class="action-buttons">
                    <form action="" method="post">
                        <?php echo ($product['quantity'] > 0) ? '<button class="add-to-cart" name="addCartBtn">
                            Add to Cart
                        </button>' : '<button class="add-to-cart" name="addCartBtn" type="button" disabled >
                            Add to Cart
                        </button>'; ?>
                    </form>
                    </button>
                    <button class="wishlist">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                        Add to Wishlist
                    </button>
                </div>
                <div class="product-meta">
                    <div class="meta-item">

                        <span><?php echo ($product['quantity'] > 0) ? '<div>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                            In Stock
                        </div>' : '<div style="color:red;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                            </svg>
                            Out Of Stock
                        </div>'; ?></span>
                    </div>
                    <div class="meta-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span>Island wide delivery available</span>
                    </div>
                </div>
                <div class="about-product">
                    <h2>About this Product</h2>
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                </div>
            </div>
        </div>
        <!--Features products section-->
        <div class="features_product">
            <?php
            while ($rows = mysqli_fetch_assoc($features_res)) {
                ?>
                <div class="products">
                    <div class="pro_image">
                        <img src="../../Admin/Assets/images/products/<?php echo $rows['image']; ?>" alt="product image">
                    </div>
                    <div class="pro_details">
                        <h5><?php echo $rows['product_name']; ?></h5>
                        <p>Brand: <?php echo $rows['supplier']; ?></p>
                        <p style="font-weight: bold;">Rs. <?php echo $rows['retail_price']; ?>.00</p>
                        <button onclick="location.href='productview.php?id=<?php echo $rows['product_id']; ?>';"
                            class="view">View Product</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Add this HTML somewhere in your page -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>You are not logged in. Please log in to continue.</p>
                </div>
                <div class="modal-footer">
                    <a href="../login_signup_page/login_signup_page.php" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- js Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>