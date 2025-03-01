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
} else {
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

//remove from cart
if (isset($_POST['remove_from_cart'])) {
    $remove_pro_id = $_POST['remove_product_id'];
    $remove_sql = "DELETE FROM cart WHERE product_id = '$remove_pro_id'";
    $res_remove = mysqli_query($conn, $remove_sql);

    if ($res_remove) {
        $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Successfully removed from cart",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = "./cartview.php";
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

//total price calculation
$total_price = 0;
$sub_total = 0;

if ($res_product && mysqli_num_rows($res_product) > 0) {
    while ($row = mysqli_fetch_assoc($res_product)) {
        $total_price += $row['retail_price'];
    }
    $sub_total = $total_price + 300;
    mysqli_data_seek($res_product, 0);
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

    <?php if (isset($message))
        echo $message; ?>

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
                            <form action="./cartview.php" method="post">
                                <input style="display:none;" type="text" name="remove_product_id" id=""
                                    value="<?php echo $row['product_id']; ?>">
                                <button class="removeBtn" name="remove_from_cart"><i class="bi bi-x"></i></button>
                            </form>
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
                <span id="subtotal">Rs. <?php echo number_format($total_price, 2); ?></span>
            </div>
            <div>
                <span>Shipping Fee</span>
                <span>Rs. 300</span>
            </div>
            <div>
                <strong>Total</strong>
                <strong id="total">Rs. <?php echo number_format($sub_total, 2); ?></strong>
            </div>
            <a href=""><button class="checkout-btn">Proceed to Checkout</button></a>
            <br />
            <a href=""><button class="shopping-btn">Keep Shopping</button></a>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Real time price update-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let total = <?php echo $sub_total; ?>;
            const priceElements = document.querySelectorAll(".item-price");
            const quantityControls = document.querySelectorAll(".quantity-control");

            quantityControls.forEach((control, index) => {
                const decrementBtn = control.querySelector("#decrement");
                const incrementBtn = control.querySelector("#increment");
                const quantitySpan = control.querySelector(".number");
                let price = parseFloat(priceElements[index].textContent.replace("Rs. ", ""));

                decrementBtn.addEventListener("click", function () {
                    let quantity = parseInt(quantitySpan.textContent);
                    if (quantity > 1) {
                        quantity--;
                        quantitySpan.textContent = quantity;
                        updateTotal();
                    }
                });

                incrementBtn.addEventListener("click", function () {
                    let quantity = parseInt(quantitySpan.textContent);
                    quantity++;
                    quantitySpan.textContent = quantity;
                    updateTotal();
                });

                function updateTotal() {
                    let newTotal = 0;
                    document.querySelectorAll(".cart-item").forEach((item, i) => {
                        let itemPrice = parseFloat(priceElements[i].textContent.replace("Rs. ", ""));
                        let itemQuantity = parseInt(item.querySelector(".number").textContent);
                        newTotal += itemPrice * itemQuantity;
                    });

                    let shippingFee = 300;
                    let finalTotal = newTotal + shippingFee;

                    document.getElementById("subtotal").textContent = "Rs. " + newTotal.toFixed(2);
                    document.getElementById("total").textContent = "Rs. " + finalTotal.toFixed(2);
                }

            });
        });
    </script>

</body>

</html>