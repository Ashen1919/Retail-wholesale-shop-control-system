<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">
        
    <!-- CSS Files -->
    <link href="../Assets/css/checkout.css" rel="stylesheet">
    
</head>
<body>
    <!-- Include Header -->
   <?php include '../includes/header.php'; ?> 

     <div>
     <h2>  Checkout</h2>
     </div>

    <div class="payment-container">
        <div class="payment-methods">
            <h2>Select Payment Method</h2>
            <div class="method-grid">
                <div class="method-item active">
                    <img src="..\Assets\images\cart images\card.png" alt="Credit/Debit Card" class="method-icon">
                    <h3>Credit/Debit Card</h3>
                    <a href="..\Cart\payment.php"><p>Credit/Debit Card</p></a>
                </div>
                <div class="method-item">
                    <img src="..\Assets\images\cart images\cashondelivery.png" alt="Cash on Delivery" class="method-icon">
                    <h3>Cash on Delivery</h3>
                    <a href="..\Cart\deliverydetails.php"><p>Cash on Delivery</p></a>
                </div>
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
            <button class="checkout-btn">Pay Now</button>
            <br/>
            <button class="shopping-btn">Cancel</button>
        </div>
    </div>
    <script src="../Assets/js/checkout.js"></script>



</body>
</html>