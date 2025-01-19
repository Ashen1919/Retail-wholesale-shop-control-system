<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    
    <!-- CSS Files -->
    <!-- <link href="../Assets/css/cart_style.css" rel="stylesheet"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-items {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-summary {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .cart-header h2 {
            margin: 0;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .cart-item img {
            width: 80px;
            height: auto;
            margin-right: 20px;
            border-radius: 5px;
        }

        .item-details {
            flex: 1;
        }

        .item-details h4 {
            margin: 0 0 5px;
        }

        .item-price {
            font-size: 1.2em;
            color: #e67e22;
            font-weight: bold;
        }

        .item-actions {
            display: flex;
            align-items: center;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .quantity-control button {
            width: 30px;
            height: 30px;
            background: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .quantity-control input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 5px;
        }

        .remove-btn {
            color: red;
            cursor: pointer;
            font-size: 0.9em;
        }

        .order-summary h3 {
            margin: 0 0 10px;
        }

        .order-summary div {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }

        .checkout-btn {
            background: #e67e22;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            width: 100%;
        }

        .checkout-btn:hover {
            background: #cf6d1f;
        }

        .shopping-btn {
            background:rgb(14, 181, 56);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            width: 100%;
        }

    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <!-- <script src="../Assets/js/script.js"></script> -->

    <div class="container">
        <div class="cart-items">
            <div class="cart-header">
                <h2>Shopping Cart</h2>
                <button>Delete All</button>
            </div>

            <div class="cart-item">
            <img src="../Assets/images/cart images/teabag.png" alt="Tea Bags">
                <div class="item-details">
                    <h4>Zesta 90g 50 Tea Bags</h4>
                    <p>Brand: Zesta</p>
                    
                </div>
                <div class="item-actions">
                    <div class="quantity-control">
                        <button onclick="updateQuantity(-1, 0)">-</button>
                        <input type="number" id="quantity-0" value="1" min="1">
                        <button onclick="updateQuantity(1, 0)">+</button>
                    </div>
                    <p class="item-price">Rs. 300</p>
                    <span class="remove-btn">&#x1F5D1;</span>
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
            <br/>
            <button class="shopping-btn">Keep Shopping</button>
        </div>
    </div>

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

</body>
</html>