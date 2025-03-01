<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- CSS Files -->
    <link href="../Assets/css/checkout.css" rel="stylesheet">

</head>

<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <div class="payment-container">
        <div class="payment-methods">
            <h2>Select Payment Method</h2>
            <div class="method-grid">
                <a style="text-decoration:none;" href="">
                    <div class="method-item active">
                        <img src="..\Assets\images\cart images\card.png" alt="Credit/Debit Card" class="method-icon">
                        <h3>Credit/Debit Card</h3>
                    </div>
                </a>
                <a style="text-decoration:none;" href="..\Cart\deliverydetails.php">
                    <div class="method-item">
                        <img src="..\Assets\images\cart images\cashondelivery.png" alt="Cash on Delivery"
                            class="method-icon">
                        <h3>Cash on Delivery</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="order-summary">
            <h3>Order Summary</h3>
            <div>
                <span>Subtotal</span>
                <span id="subtotal">Rs. 300</span>
            </div>
            <div>
                <span>Shipping Fee</span>
                <span>Rs. 250</span>
            </div>
            <div>
                <strong>Total</strong>
                <strong id="total">Rs. 550</strong>
            </div>
            <a href="..\Cart\payment.php"><button class="checkout-btn">Pay Now</button></a>
            <br />
            <button class="shopping-btn">Cancel</button>
        </div>
    </div>
    <script src="../Assets/js/checkout.js"></script>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>


</body>

</html>