<?php
session_start();
error_reporting(0);
//include header
include '../includes/header.php';

//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//retrieve cart details
$email = $_SESSION['user_email'];
$cart_sql = "SELECT product_id FROM cart WHERE email = '$email'";
$res_cart = mysqli_query($conn, $cart_sql);

if (mysqli_num_rows($res_cart) > 0) {
    $product_ids = [];
    while ($row = mysqli_fetch_assoc($res_cart)) {
        $product_ids[] = $row['product_id'];
    }
}else{
    $res_product = false;
}

if (!empty($product_ids)) {
    $escaped_ids = array_map(function ($id) use ($conn) {
        return mysqli_real_escape_string($conn, $id);
    }, $product_ids);

    $product_ids_string = "'" . implode("','", $escaped_ids) . "'";

    // Retrieve product details
    $product_sql = "SELECT * FROM products WHERE product_id IN ($product_ids_string)";
    $res_product = mysqli_query($conn, $product_sql);

    if (!$res_product) {
        die("Product Query Failed: " . mysqli_error($conn));
    }
}

//close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">
    <!-- css files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Assets/css/cart.css">
</head>

<body>

    <div class="container_cart">
        <div style="display: block; width:100%;">
            <div class="cart-header">
                <h2>Your Shopping Cart</h2>
            </div>
            <?php
            if ($res_product && mysqli_num_rows($res_product) > 0) {
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($res_product)) {
                    ?>
                    <div class="cart-item">
                        <div style="display:flex; align-items: center; ">
                            <img src="../../Admin/Assets/images/products/<?php echo $row['image']; ?>" alt="Tea Bags">
                            <div class="item-details">
                                <h4><?php echo $row['product_name']; ?></h4>
                                <p>Brand: <?php echo $row['supplier']; ?></p>
                            </div>
                        </div>
                        <div class="item-actions">
                            <div class="quantity-control">
                                <button id="decrement">-</button>
                                <span class="number">1</span>
                                <button id="increment">+</button>
                            </div>
                            <p class="item-price">Rs. <?php echo $row['retail_price']; ?></p>
                            <button class="removeBtn"><i class="bi bi-x"></i></button>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
            } else {
                ?>
                <h5><i>Your cart is empty!</i></h5>
            <?php } ?>

        </div>

        <div class="order-summary">
            <h3>Order Summary</h3>
            <div>
                <span>Subtotal</span>
                <span id="subtotal">Rs. 300</span>
            </div>
            <div>
                <span>Shipping Fee</span>
                <span>Rs. 0</span>
            </div>
            <div>
                <strong>Total</strong>
                <strong id="total">Rs. 300</strong>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
            <br />
            <button class="shopping-btn">Keep Shopping</button>
        </div>
    </div>



    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>