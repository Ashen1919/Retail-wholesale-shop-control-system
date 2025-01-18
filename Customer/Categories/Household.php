<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household - Sandaru Food Mart</title>

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
        <li class="breadcrumb-item active" aria-current="page">Household</li>
    </ol>
</nav>

    <main class="category-main">
        <div class="category-header">
            <h2 style="font-family: poppins;">..Household..</h2>
        </div>

        <div class="category-description">
            <p><i>Send and deliver Online household - Lowest Prices</i></p>
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
                    <img src="../Assets/images/Household_Page/diva.jpg" alt="Pack of 10 Eggs">
                </div>
                <div class="product-details">
                    <h3>Diva Colour Guard Liquid   </h3>
                    <p class="price">Rs. 609.00</p>
                    <p class="weight">(1l)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Household_Page/surf.jpg" alt="Pack of 10 Eggs">
                </div>
                <div class="product-details">
                    <h3>Surf Excel Matic Top Load</h3>
                    <p class="price">Rs. 476.00</p>
                    <p class="weight">(1kg)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Household_Page/lifeboy.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>Lifebuoy Active Total Soap</h3>
                    <p class="price">Rs. 127.00</p>
                    <p class="weight">(100g)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Household_Page/lysol.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Lysol Floral Disinfectant </h3>
                    <p class="price">Rs. 425.00</p>
                    <p class="weight">(500ml)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Household_Page/vim.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Vim Liquid Dishwash </h3>
                    <p class="price">Rs. 425.00</p>
                    <p class="weight">(500ml)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Household_Page/mortein.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>Mortein Fast Killer </h3>
                    <p class="price">Rs. 1147.00</p>
                    <p class="weight">(400ml)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            
        </div>
    </main>
    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    

    <script src="../Assets/js/script.js"></script>
</body>
</html>