<!-- Include Header -->
<?php include '../includes/header.php'; ?>

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
            <div class="cart-item">
                <div style="display:flex; align-items: center; ">
                    <img src="../Assets/images/cart images/teabag.png" alt="Tea Bags">
                    <div class="item-details">
                        <h4>Zesta 90g 50 Tea Bags</h4>
                        <p>Brand: Zesta</p>
                    </div>
                </div>
                <div class="item-actions">
                    <div class="quantity-control">
                        <button id="decrement">-</button>
                        <span class="number">1</span>
                        <button id="increment">+</button>
                    </div>
                    <p class="item-price">Rs. 300</p>
                    <button class="removeBtn"><i class="bi bi-x"></i></button>
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

    <!-- js files -->
    <script>
        const updateQuantity = (change, index) => {
            const quantityInput = document.getElementById(`quantity-${index}`);
            const currentQuantity = parseInt(quantityInput.value);
            const newQuantity = Math.max(1, currentQuantity + change);
            quantityInput.value = newQuantity;
            updateTotals();
        };

        const updateTotals = () => {
            const quantity = parseInt(document.getElementById('quantity-0').value);
            const pricePerItem = 300;
            const subtotal = quantity * pricePerItem;
            document.getElementById('subtotal').textContent = `Rs. ${subtotal}`;
            document.getElementById('total').textContent = `Rs. ${subtotal}`;
        };
    </script>


    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    <script src="../Assets/js/cart.js"></script>

</body>

</html>