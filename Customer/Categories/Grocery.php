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
    <link href="../Assets/css/Category.css" rel="stylesheet">
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
            <h2>..Grocery..</h2>
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
            <!-- Product Card 1 -->

            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Grocery_Page/samba.jpg" alt="Samba">
                </div>
                <div class="product-details">
                    <h3>Rice Samba Bulk</h3>
                    <p class="price">Rs. 240.00</p>
                    <p class="weight">(1kg)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Grocery_Page/eggs.jfif" alt="Pack of 10 Eggs">
                </div>
                <div class="product-details">
                    <h3>Pack of 10 Eggs</h3>
                    <p class="price">Rs. 521.00</p>
                    <p class="weight">(Large 10S)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Grocery_Page/white-sugar.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>White Sugar</h3>
                    <p class="price">Rs. 298.00</p>
                    <p class="weight">(1 kg)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Grocery_Page/dhal.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Mysoore Dhal Bulk</h3>
                    <p class="price">Rs. 280.00</p>
                    <p class="weight">(1kg)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Grocery_Page/canned-fish.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Catch Canned Fish</h3>
                    <p class="price">Rs. 650.00</p>
                    <p class="weight">(425g)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Grocery_Page/noodles.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>Harischandra Plain Noodles</h3>
                    <p class="price">Rs. 300.00</p>
                    <p class="weight">(400g)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            
        </div>
    </main>

    

    <script src="../Assets/js/script.js"></script>
</body>
</html>