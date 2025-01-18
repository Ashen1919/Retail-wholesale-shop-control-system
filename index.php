<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="./Customer/Assets/images/logo.png" rel="icon">
    <link href="./Customer/Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="./Customer/Assets/css/styles.css" rel="stylesheet">
    <link href="./Customer/Assets/css/contact.css" rel="stylesheet">
    <link href="./Customer/Assets/css/footer.css" rel="stylesheet">
    <link href="./Customer/Assets/css/logo_promos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <!--Preloader-->

    <!--End of Preloader-->

    <!-- Include Header -->
    <header class="header-wrapper">

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
                <a href=""><img src="./Customer/Assets/images/logo.png" alt="logo">
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
                    <li><a href="" class="active">Home<br></a></li>
                    <li><a href="#about">About us</a></li>
                    <li class="dropdown"><a href="#categories"><span>Categories</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="./Customer/Categories/Grocery.php">Grocery</a></li>
                            <li><a href="./Customer/Categories/Vegetables.php">Vegetables</a></li>
                            <li><a href="./Customer/Categories/Fruits.php">Fruits</a></li>
                            <li><a href="./Customer/Categories/Beverages.php">Beverages</a></li>
                            <li><a href="./Customer/Categories/Household.php">Household</a></li>
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

    <!--Hero section-->
    <div class="hero">
        <div class="left-card">
            <div class="left-content">
                <p class="sub-title">100% Fresh</p>
                <p class="main-title">Everything you need, All in one place.</p>
                <p class="description">Sandaru Food Mart offers fresh, high-quality groceries, ensuring
                    excellent
                    produce, meats, and pantry essentials.</p>
                <button class="shop-btn">Shop Now <i class="bi bi-arrow-right"></i></button>
            </div>
            <div class="right-img">
                <img src="./Customer/Assets/images/shopping cart.png" alt="Card-image">
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
                    <img src="./Customer/Assets/images/fruit & vege bucket.png" alt="Card-image">
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
                    <img src="./Customer/Assets/images/households.png" alt="Card-image">
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

    <div class="category-section" id="categories">
        <div class="category-header">
            <h2 style="text-align: center;">Shop by Category</h2>
        </div>

        <div class="category-grid">
            <div class="category-item">
                <img src="./Customer/Assets/images/shop by category/grocery.png" alt="Grocery" class="category-image">
                <div class="category-name">
                    <a href="./Customer/Categories/Grocery.php" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Grocery
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="./Customer/Assets/images/shop by category/vegetables.jpg" alt="Vegetables"
                    class="category-image">
                <div class="category-name">
                    <a href="./Customer/Categories/Vegetables.php" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Vegetables
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="./Customer/Assets/images/shop by category/fruit.jpg" alt="Fruits" class="category-image">
                <div class="category-name">
                    <a href="./Customer/Categories/Fruits.php" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Fruits
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="./Customer/Assets/images/shop by category/beverages.jpg" alt="Beverages"
                    class="category-image">
                <div class="category-name">
                    <a href="./Customer/Categories/Beverages.php" class="styled-link">
                        <i class="bi bi-basket2-fill"></i> Beverages
                    </a>
                </div>
            </div>
            <div class="category-item">
                <img src="./Customer/Assets/images/shop by category/household.jpg" alt="Household"
                    class="category-image">
                <div class="category-name">
                    <a href="./Customer/Categories/Household.php" class="styled-link">
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
                        <img src="./Customer/Assets/images/best selling products/Dhal.jpg" alt="Dhal">
                        <span class="volume">1kg</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 280.00 LKR</h3>

                        <p class="product-name">Mysoore Dhal Bulk</p>
                        <p>1kg</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Bread.jpg" alt="Bread">
                        <span class="volume">450g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 149.00 LKR</h3>

                        <p class="product-name">Top Crust Bread </p>
                        <p>450g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Carrot.jpg" alt="Carrot">
                        <span class="volume">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 140.00 LKR</h3>

                        <p class="product-name">Carrot </p>
                        <p>500g</p>
                        <button class="add-to-cart">Add To Cart

                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Potatoes.jpg" alt="Potatoes">
                        <span class="volume">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 245.00 LKR</h3>

                        <p class="product-name">Potatoes </p>
                        <p>500g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Big Onions.jpg" alt="Big Onions">
                        <span class="weight">500g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 245.00 LKR</h3>

                        <p class="product-name">Big Onions </p>
                        <p>500g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Vim Dishwash.jpeg"
                            alt="Vim Anti-Bacterial">
                        <span class="volume">500ml</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 450.00 LKR</h3>

                        <p class="product-name">Vim Dishwash </p>
                        <p>500ml</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Coconut.jpg" alt="Coconut">
                        <span class="volume">1unit</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 175.00 LKR</h3>

                        <p class="product-name">Tropical Fresh Coconut </p>
                        <p>1unit</p>
                        <button class="add-to-cart">Add To Cart

                        </button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Milk shoties.jpg"
                            alt="Munchee Milk Short Cake">
                        <span class="weight">200g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 230.00 LKR</h3>

                        <p class="product-name">Munchee Milk Short Cake </p>
                        <p>200g</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/Fresh milk.jpg" alt="Fresh milk">
                        <span class="volume">1L</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 550.00 LKR</h3>

                        <p class="product-name">Ambewela Fresh Milk </p>
                        <p>1L</p>
                        <button class="add-to-cart">Add To Cart

                        </button>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Customer/Assets/images/best selling products/sunlight.png" alt="Sunlight(Lemon)">
                        <span class="volume">330g</span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs 420.00 LKR</h3>

                        <p class="product-name">Sunlight Lemon Soap </p>
                        <p>110g * 3</p>
                        <button class="add-to-cart">Add To Cart
                        </button>
                    </div>
                </div>



            </div>


        </div>
    </section>

    <!--End of Best Selling Products Section-->

    <!--Promotion Area-->
    <div class="promo-section">
        <div class="text-section">
            <h1>Seamless Shopping, Anytime & Anywhere</h1>
            <p>Your Retail and Wholesale Partner for Smarter Delivery Solutions</p>
            <a href="#categories"><button>Shop Now <i class="bi bi-arrow-right"></i></button></a>
        </div>
    </div>
    <!--End of Promotion Area-->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container title-section" data-aos="fade-up">
            <h2 class="section-title">Contact Us</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h4 class="mt-3">Address</h4>
                        <p>328/1/D, Kokiskade Junction, Kirillawala, Kandy Road.</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h4 class="mt-3">Call Us</h4>
                        <p>+94 33 267 8970</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h4 class="mt-3">Email Us</h4>
                        <p>sandarufoodmart@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3959.80522962877!2d79.987123!3d7.032164999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMDEnNTUuOCJOIDc5wrA1OScxMy42IkU!5e0!3m2!1sen!2slk!4v1737170173296!5m2!1sen!2slk"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

    <!--Logo animation-->
    <div class="logos">
        <div class="logo-slide">
            <img src="./Customer/Assets/images/logos/Araliya-logo-removebg-preview.png" alt="Araliya-logo">
            <img src="./Customer/Assets/images/logos/Coca-Cola-logo.png" alt="coca-cola-logo">
            <img src="./Customer/Assets/images/logos/Elephant_House_logo.png" alt="elephant-house-logo">
            <img src="./Customer/Assets/images/logos/kotmale-logo-removebg-preview.png" alt="kotmale-logo">
            <img src="./Customer/Assets/images/logos/maliban-logo-removebg-preview.png" alt="maliban-logo">
            <img src="./Customer/Assets/images/logos/munchee-logo-removebg-preview.png" alt="munchee-logo">
            <img src="./Customer/Assets/images/logos/unilever-logo-removebg-preview.png" alt="unilever-logo">
        </div>
        <div class="logo-slide">
            <img src="./Customer/Assets/images/logos/Araliya-logo-removebg-preview.png" alt="Araliya-logo">
            <img src="./Customer/Assets/images/logos/Coca-Cola-logo.png" alt="coca-cola-logo">
            <img src="./Customer/Assets/images/logos/Elephant_House_logo.png" alt="elephant-house-logo">
            <img src="./Customer/Assets/images/logos/kotmale-logo-removebg-preview.png" alt="kotmale-logo">
            <img src="./Customer/Assets/images/logos/maliban-logo-removebg-preview.png" alt="maliban-logo">
            <img src="./Customer/Assets/images/logos/munchee-logo-removebg-preview.png" alt="munchee-logo">
            <img src="./Customer/Assets/images/logos/unilever-logo-removebg-preview.png" alt="unilever-logo">
        </div>
        <div class="logo-slide">
            <img src="./Customer/Assets/images/logos/Araliya-logo-removebg-preview.png" alt="Araliya-logo">
            <img src="./Customer/Assets/images/logos/Coca-Cola-logo.png" alt="coca-cola-logo">
            <img src="./Customer/Assets/images/logos/Elephant_House_logo.png" alt="elephant-house-logo">
            <img src="./Customer/Assets/images/logos/kotmale-logo-removebg-preview.png" alt="kotmale-logo">
            <img src="./Customer/Assets/images/logos/maliban-logo-removebg-preview.png" alt="maliban-logo">
            <img src="./Customer/Assets/images/logos/munchee-logo-removebg-preview.png" alt="munchee-logo">
            <img src="./Customer/Assets/images/logos/unilever-logo-removebg-preview.png" alt="unilever-logo">
        </div>
    </div>
    <!--End of Logo animation-->

    <!--Footer section-->
    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex text-decoration-none align-items-center">
                        <span class="sitename">Sandaru Food Mart</span>
                    </a>
                    <p>Sandaru Food Mart: Your trusted retail and wholesale destination offering fresh, quality
                        products, competitive prices, and exceptional customer service. </p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-whatsapp"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#categories">Categories</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Categories</h4>
                    <ul>
                        <li><a href="./Customer/Categories/Grocery.php">Grocery</a></li>
                        <li><a href="./Customer/Categories/Vegetables.php">Vegetables</a></li>
                        <li><a href="./Customer/Categories/Fruits.php">Fruits</a></li>
                        <li><a href="./Customer/Categories/Beverages.php">Beverages</a></li>
                        <li><a href="./Customer/Categories/Household.php">Household</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>328/1/D, Kokiskade Junction,</p>
                    <p>Kirillawala, Kandy Road.</p>
                    <p>Sri Lanka</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+94 33 267 8970</span></p>
                    <p><strong>Email:</strong> <span>sandarufoodmart@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">Sandaru Food Mart</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="">NextWave Creaters</a>
            </div>
        </div>

    </footer>
    <!--End of footer section-->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="./Customer/Assets/js/script.js"></script>


</body>

</html>