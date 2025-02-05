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
    
    <link href="../Assets/css/cart_style.css" rel="stylesheet">
    
</head>
<body>

    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    
  <div class="product-page">

    <div class="product-image">
    <div class="col"></div>
    <div class="slider"></div> 
              <img src="../Assets/images/cart images/teabag.png" alt="Tea Bags">
           </div>
 
    <div class="product-details">
      
      <h1>Zesta Tea Bags</h1>
      <div class="units">90g | 50 Tea Bags per Pack</div>
      <div class="price">Rs. 300.00</div>
      </br>
      <div class="action-buttons">
                    <button class="add-to-cart">
                        Add to Cart
                    </button>
                    <button class="wishlist">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                        Add to Wishlist
                    </button>
                </div>
      <div class="product-meta">
                <div class="meta-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span>In Stock</span>
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
            <p>Experience the rich heritage of Ceylon tea with Zesta Tea Bags. Each carefully selected tea bag contains premium quality Ceylon black tea leaves, ensuring a perfect brew with every cup. 
              </p>
        </div>
    </div>
  </div>

  <!-- Include Footer -->
  <?php include '../includes/footer.php'; ?>

  <!-- js Files -->
  <script src="../Assets/js/cart.js"></script>

</body>
</html>