<?php 
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Fetch all grocery category products
$sql = "SELECT * FROM products WHERE product_category = 'Grocery'";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery - Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">
        
    <!-- CSS Files -->
    <link href="../Assets/css/styles.css" rel="stylesheet">
    <link href="../Assets/css/Categories.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item active" aria-current="page">Grocery</li>
    </ol>
</nav>

    <main class="category-main">
        <div class="category-header">
            <h2 style="font-family: poppins;">..Grocery..</h2>
        </div>

        <div class="category-description">
            <p><i>Send and deliver Online grocery - Lowest Prices</i></p>
        </div>


        <div class="sort-section">
            <label for="sort">Sort by:</label>
            <select name="sort" id="sort">
                <option value="best-sellers">Best Sellers</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="newest">Newest First</option>
            </select>
        </div>

        <div class="products-grid">

            <?php

            while ($row = mysqli_fetch_assoc($result)) 
            {
              ?>  

            <div class="product-card">
                <div class="product-image">
                    <img src="../../Admin/Assets/images/products/<?php echo $row['image'] ?>" alt="Product images">
                </div>
                <div class="product-details">
                    <h3><?php echo $row['product_name'] ?></h3>
                    <p class="price">Rs. <?php echo $row['retail_price'] ?>.00</p>
                    <p class="weight">(<?php echo $row['units'] ?>)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>
              <?php
            }

            ?>
        </div>
    </main>
    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    

    <script src="../Assets/js/script.js"></script>
</body>
</html>