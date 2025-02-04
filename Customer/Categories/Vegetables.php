<?php 
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Fetch all vegetable category products
$sql = "SELECT * FROM products WHERE product_category = 'Vegetables'";

// Handle sorting
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'newest';
switch($sort) {
    case 'price-low':
        $sql .= " ORDER BY retail_price ASC";
        break;
    case 'price-high':
        $sql .= " ORDER BY retail_price DESC";
        break;
    case 'best-sellers':
        $sql .= " ORDER BY quantity DESC";
        break;
    default:
        $sql .= " ORDER BY id DESC"; // newest first
}

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables - Sandaru Food Mart</title>

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
        <li class="breadcrumb-item active" aria-current="page">Vegetables</li>
    </ol>
</nav>

    <main class="category-main">
        <div class="category-header">
            <h2 style="font-family: poppins;">..Vegetables..</h2>
        </div>

        <div class="category-description">
            <p><i>Get fresh vegetables delivered to your home</i></p>
        </div>

        <div class="sort-section">
            <label for="sort">Sort by:</label>
            <select name="sort" id="sort" onchange="window.location.href='?sort='+this.value">
                <option value="best-sellers"<?php echo $sort == 'best-sellers' ? 'selected' : ''; ?>>Best Sellers</option>
                <option value="price-low"<?php echo $sort == 'price-low' ? 'selected' : ''; ?>>Price: Low to High</option>
                <option value="price-high"<?php echo $sort == 'price-high' ? 'selected' : ''; ?>>Price: High to Low</option>
                <option value="newest"<?php echo $sort == 'newest' ? 'selected' : ''; ?>>Newest First</option>
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