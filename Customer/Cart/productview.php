<?php
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

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

    <link href="../Assets/css/cart_style.css" rel="stylesheet">

</head>

<body>

    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>


    <div class="product-page">

        <div class="product-image">
            <div class="col"></div>
            <div class="slider"></div>
            <img src="../../Admin/Assets/images/products/<?php echo htmlspecialchars($product['image']); ?>"
                alt="<?php echo htmlspecialchars($product['product_name']); ?>">
        </div>

        <div class="product-details">

            <h1><?php echo htmlspecialchars($product['product_name']); ?></h1>
            <div class="units"><?php echo htmlspecialchars($product['units']); ?></div>
            <div class="price">Rs. <?php echo formatPrice($product['retail_price']); ?></div>
            </br>
            <div class="action-buttons">
                <button class="add-to-cart">
                    Add to Cart
                </button>
                </button>
                <button class="wishlist">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                    Add to Wishlist
                </button>
            </div>
            <div class="product-meta">
                <div class="meta-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span><?php echo ($product['quantity'] > 0) ? 'In Stock' : 'Out of Stock'; ?></span>
                </div>
                <div class="meta-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
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

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- js Files -->
    <script src="../Assets/js/cart.js"></script>

</body>

</html>