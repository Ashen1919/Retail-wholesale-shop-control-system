<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <!--Preloader-->
    
    <!--End of Preloader-->
    <!--Header-->
    <header>
        <!--Top Bar-->
        <div class="topBar">
            <div class="contact-details">
                <ul class="contact">
                    <a href="#">
                        <li><i class="bi bi-envelope-fill text-primary"></i>sandarufoodmart@gmail.com</li>
                    </a>
                    <li><i class="bi bi-telephone-fill text-primary"></i>+94 33 267 8970</li>
                </ul>
            </div>
            <div class="searchBar">
                <form action="" method="get" class="search-form">
                    <input type="search" name="search" id="search" placeholder="Search Here">
                    <button type="submit" class="search-button">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            <div class="social-icon">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <!--End of Top Bar-->

        <!--Nav Bar-->
        <div class="navbar">
            <div class="logo">
                <a href=""><img
                        src="../Assets/images/logo.png"
                        alt="logo">
                    <p>Sandaru Food <span class="mart">Mart</span></p>
                </a>
            </div>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <div class="mobile-searchBar">
                        <form action="" method="get" class="search-form">
                            <input type="search" name="search" id="search" placeholder="Search Here">
                            <button type="submit" class="search-button">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About us</a></li>
                    <li class="dropdown"><a href="#"><span>Categories</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Grocery</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Beverages</a></li>
                            <li><a href="#">Household</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact us</a></li>
                    <div class="right-side-mobile-icons">
                        <a class="cart" href=""><i class="bi bi-cart4 "></i></a>
                        <a class="wishlist" href=""><i class="bi bi-heart  "></i></i></a>
                        <a class="profile" href=""><i class="bi bi-person-circle "></i></a>
                    </div>
                </ul>
                <div class="search-icon">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </div>
            </nav>
            <div class="right-side-icons">
                <a class="cart" href=""><i class="bi bi-cart4 "></i></a>
                <a class="wishlist" href=""><i class="bi bi-heart  "></i></i></a>
                <a class="profile" href=""><i class="bi bi-person-circle "></i></a>
            </div>
        </div>
        <!--End of Nav Bar-->
    </header>
    <!--End of header-->

    <!--Hero section-->
    <div class="hero">
        <div class="left-card">
            <div class="left-content">
                <p class="sub-title">100% Fresh</p>
                <p class="main-title">Everything you need, All in one place.</p>
                <p class="description">Sandaru Food Mart offers fresh, high-quality groceries, ensuring excellent
                    produce, meats, and pantry essentials.</p>
                <button class="shop-btn">Shop Now <i class="bi bi-arrow-right"></i></button>
            </div>
            <div class="right-img">
                <img src="../Assets/images/shopping cart.png"
                    alt="Card-image">
            </div>
        </div>
        <div class="right-card">
            <div class="right-top-card">
                <div class="left-text">
                    <p class="sub-text">20% OFF</p>
                    <p class="main-text">Fruits & Vegetables</p>
                    <p>Sandaru Food Mart delivers fresh, high-quality fruits and vegetables.</p>
                    <button class="shop-btn">Shop Now <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="right-side-img">
                    <img src="../Assets/images/fruit & vege bucket.png"
                        alt="Card-image">
                </div>
            </div>
            <div class="right-bottom-card">
                <div class="left-bottom-text">
                    <p class="sub-bottom-text">15% OFF</p>
                    <p class="main-bottom-text">Shop fresh,shop smart</p>
                    <p>Top-quality, reliable, durable house essentials.</p>
                    <button class="shop-btn">Shop Now <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="right-side-bottom-img">
                    <img src="../Assets/images/households.png"
                        alt="Card-image">
                </div>
            </div>
        </div>
    </div>
    <!--End of the hero section-->

    <!--features cards-->
    <div class="features-card">
        <div class="card1">
            <div class="icon">
                <i class="bi bi-truck"></i>
            </div>
            <div class="heading">
                <p>Fast Delivery</p>
            </div>
            <div class="description">
                <p>Quick, reliable, fresh groceries delivered promptly to your doorstep daily.</p>
            </div>
        </div>
        <div class="card1">
            <div class="icon">
                <i class="bi bi-shield-check"></i>
            </div>
            <div class="heading">
                <p>100% Secure Payment</p>
            </div>
            <div class="description">
                <p>Secure payment ensures safe, reliable transactions at Sandaru Food Mart.</p>
            </div>
        </div>
        <div class="card1">
            <div class="icon">
                <i class="bi bi-shop"></i>
            </div>
            <div class="heading">
                <p>Quality Guarantee</p>
            </div>
            <div class="description">
                <p>Ensuring freshness, authenticity, and satisfaction with every product guaranteed.</p>
            </div>
        </div>
        <div class="card1">
            <div class="icon">
                <i class="bi bi-gift"></i>
            </div>
            <div class="heading">
                <p>Daily Offers</p>
            </div>
            <div class="description">
                <p>Exciting daily offers at Sandaru Food Mart: Save big, shop smart!</p>
            </div>
        </div>
    </div>
    <!--End of features cards-->

    <!--Category Section-->

    <div class="category-section">
        <div class="category-header">
            <h2 style="text-align: center;">Shop by Category</h2>
        </div>
        
        <div class="category-grid">
            <div class="category-item">
                <img src="../Assets/images/shop by category/grocery.png" alt="Grocery" class="category-image">
                <div class="category-name">
                    <a href="grocery.html" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Grocery
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="../Assets/images/shop by category/vegetables.jpg" alt="Vegetables" class="category-image">
                <div class="category-name">
                    <a href="vegetables.html" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Vegetables
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="../Assets/images/shop by category/fruit.jpg" alt="Fruits" class="category-image">
                <div class="category-name">
                    <a href="fruits.html" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Fruits
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="../Assets/images/shop by category/beverages.jpg" alt="Beverages" class="category-image">
                <div class="category-name">
                    <a href="beverages.html" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Beverages
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="../Assets/images/shop by category/household.jpg" alt="Household" class="category-image">
                <div class="category-name">
                    <a href="household.html" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Household
                    </a>
                </div>
            </div>
        </div>
        
    </div>

    <!--End of Category Section-->

    <!--Best Selling Products Section-->

    <section class="best-sellers">
        <div class="section-header">
            <div class="title-container">
                <h2 class="section-title">Best Selling Products</h2>
            </div>
            
        </div>
        
        
        <div class="product-carousel"> 
            
            <div class="products-container">
                <!-- Product 1 -->
                <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/best selling products/Dhal.jpg" alt="Dhal">
                    <span class="volume">1kg</span>
                </div>
                <div class="product-info">
                    <h3 class="price">Rs 280.00 LKR</h3>
                    
                    <p class="product-name">Mysoore Dhal Bulk</p><p>1kg</p>
                    <button class="add-to-cart">Add To Cart
                    </button>
                </div>
            </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Bread.jpg" alt="Bread">
                        <span class="volume">450g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 149.00 LKR</h3>
                        
                        <p class="product-name">Top Crust Bread  </p><p>450g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Carrot.jpg" alt="Carrot">
                        <span class="volume">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 140.00 LKR</h3>
                        
                        <p class="product-name">Carrot </p><p>500g</p>
                        <button class="add-to-cart">Add To Cart
                        
                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Potatoes.jpg" alt="Potatoes">
                        <span class="volume">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 245.00 LKR</h3>
                        
                        <p class="product-name">Potatoes </p><p>500g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Big Onions.jpg" alt="Big Onions">
                        <span class="weight">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 245.00 LKR</h3>
                        
                        <p class="product-name">Big Onions </p><p>500g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>
    
                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Vim Dishwash.jpeg" alt="Vim Anti-Bacterial">
                        <span class="volume">500ml</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 450.00 LKR</h3>
                        
                        <p class="product-name">Vim Anti-Bacterial Dishwash  </p><p>500ml</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Coconut.jpg" alt="Coconut">
                        <span class="volume">1unit</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 175.00 LKR</h3>
                        
                        <p class="product-name">Tropical Fresh Coconut </p><p>1unit</p>
                        <button class="add-to-cart">Add To Cart
                        
                        </button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Milk shoties.jpg" alt="Munchee Milk Short Cake">
                        <span class="weight">200g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 230.00 LKR</h3>
                        
                        <p class="product-name">Munchee Milk Short Cake </p><p>200g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/Fresh milk.jpg" alt="Fresh milk">
                        <span class="volume">1L</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 550.00 LKR</h3>
                        
                        <p class="product-name">Ambewela Full Cream Fresh Milk </p><p>1L</p>
                        <button class="add-to-cart">Add To Cart
                        
                        </button>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="../Assets/images/best selling products/sunlight.png" alt="Sunlight(Lemon)">
                        <span class="volume">330g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 420.00 LKR</h3>
                        
                        <p class="product-name">Sunlight Lemon Detergent Soap </p><p>110g * 3</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>
                
    
                
            </div>
           
            
        </div>
    </section>
    
    <!--End of Best Selling Products Section-->


    <script src="../Assets/js/script.js"></script>

    
</body>

</html>