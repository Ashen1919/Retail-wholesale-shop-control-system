<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    
    <!-- CSS Files -->
    
    <link href="../Assets/css/cart_style.css" rel="stylesheet">
    
</head>
<body>
    <!-- Include Header -->
<?php include '../includes/header.php'; ?>

     <body>
  <div class="product-page">

    <div class="product-image">
    <div class="col"></div>
    <div class="slider"></div> 
              <img src="../Assets/images/cart images/teabag.png" alt="Tea Bags">
           </div>
 
    <div class="product-details">
      <h2>Brand: Zesta</h2>
      <h1>Zesta 90g 50 Tea Bags</h1>
      <p class="price">Rs. 300.00</p>
      
      <div class="quantity">
        <label for="quantity">Select Quantity:</label>
        <div class="quantity-controls">
          <button id="decrease">-</button>
          <input type="number" id="quantity" value="1" min="1">
          <button id="increase">+</button>
        </div>
      </div>

      <button class="add-to-cart">Add to Cart</button>
      </br>
      <button class="wishlist">Add to Wishlist</button>
      <p class="stock-info">In Stock</p>
      <p class="delivery-info">Island wide delivery</p>
    </div>
  </div>
  <!-- js Files -->
  <script src="../Assets/js/cart.js"></script>

</body>
</html>