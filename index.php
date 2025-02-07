<?php

session_start();

error_reporting(0);
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Fetch all promotions
$sql_promo = "SELECT * FROM promotions ORDER BY id DESC";
$data_promo = mysqli_query($conn, $sql_promo);

//Fetch all categories
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

//fetch user details
$email = $_SESSION['user_email'];
$sql_user = "SELECT * FROM customers WHERE email = '".$email."'";
$res_user = mysqli_query($conn, $sql_user);
$row_user = mysqli_fetch_assoc($res_user);

//Send contact information
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql_con = "INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $res_con = mysqli_query($conn, $sql_con);

    if($res_con){
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your Information has been submitted.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }else{
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }
}

//Fetch best selling products based on quantity sold
$sql_best_selling = "SELECT * FROM products ORDER BY quantity DESC LIMIT 10";
$result_best_selling = mysqli_query($conn, $sql_best_selling);

mysqli_close($conn);
?>

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
    <link href="./Customer/Assets/css/offer.css" rel="stylesheet">
    <link href="./Customer/Assets/css/hero.css" rel="stylesheet">
    <link href="./Customer/Assets/css/footer.css" rel="stylesheet">
    <link href="./Customer/Assets/css/logo_promos.css" rel="stylesheet">
    <link href="./Customer/Assets/css/Register.css" rel="stylesheet">
    <link href="./Customer/Assets/css/Login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>


<body>
    <?php if (isset($message))
        echo $message; ?>
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
                    <input type="search" name="search" id="main-search" placeholder="Search Here">
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
                            <input type="search" name="search" id="mobile-search" placeholder="Search Here">
                            <button type="submit" class="search-button">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                    <li><a href="" class="active">Home<br></a></li>
                    <li><a href="./Customer/aboutus/aboutus.php">About us</a></li>
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
                        <a class="cart" href="./Customer/Cart/cartview.php"><i class="bi bi-cart4 "></i></a>
                        <a class="wishlist" href=""><i class="bi bi-heart  "></i></i></a>
                        <?php
                        if ($_SESSION['user_email']) {
                            ?>
                            <div class="dropdown">
                                <img src="./Customer/Assets/images/customers/<?php echo $row_user['image'] ?>" alt="Profile Image"
                                    style="width:50px; height:50px;">
                                <div class="links">
                                    <a href="./Customer/Update Account Page/UpdateAccount.php">Settings</a>
                                    <a href="./Customer/logout.php">Logout</a>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <a class="profile" href="./Customer/login_signup_page/login_signup_page.php"
                                id="openModalBtn"><i class="bi bi-person-circle "></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </ul>
                <div class="search-icon">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </div>
            </nav>
            <div class="right-side-icons">
                <a class="cart" href="./Customer/Cart/cartview.php"><i class="bi bi-cart4 "></i></a>
                <a class="wishlist" href=""><i class="bi bi-heart  "></i></i></a>
                <?php
                if ($_SESSION['user_email']) {
                    ?>
                    <div class="dropdown">
                        <img src="./Customer/Assets/images/customers/<?php echo $row_user['image'] ?>" alt="Profile Image" style="width:50px; height:50px;">
                        <div class="links">
                            <a href="./Customer/Update Account Page/UpdateAccount.php">Settings</a>
                            <a href="./Customer/logout.php">Logout</a>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <a class="profile" href="./Customer/login_signup_page/login_signup_page.php" id="openModalBtn"><i
                            class="bi bi-person-circle "></i></a>
                    <?php
                }
                ?>

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
            <h2 style="text-align: center; font-family: poppins;">Shop by Category</h2>
        </div>

        <div class="category-grid">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                // Get the category name and convert it to the correct filename format
                $category_page = $row['name'] . '.php';
                ?>
                <div class="category-item">
                    <img src="./Admin/Assets/images/categories/<?php echo $row['image']; ?>"
                        alt="<?php echo $row['name']; ?>" class="category-image">
                    <div class="category-name">
                        <a href="./Customer/Categories/<?php echo $category_page; ?>" class="styled-link">
                            <i class="bi bi-basket2-fill"></i> <?php echo $row['name']; ?>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

    </div>

    <!--End of Category Section-->

    <!--Best Selling Products Section-->

    <section class="best-sellers">
        <div class="section-header">
            <div class="title-container">
                <h2 class="section-title" style="font-family: poppins;">Best Selling Products</h2>
            </div>

        </div>


        <div class="product-carousel">

            <div class="products-container">
            <?php
            while ($row = mysqli_fetch_assoc($result_best_selling)) {
                ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="./Admin/Assets/images/products/<?php echo $row['image']; ?>" 
                             alt="<?php echo htmlspecialchars($row['product_name']); ?>">
                        <span class="volume"><?php echo htmlspecialchars($row['units']); ?></span>
                    </div>
                    <div class="product-info">
                        <h3 class="price">Rs <?php echo number_format($row['retail_price'], 2); ?> LKR</h3>
                        <p class="product-name"><?php echo htmlspecialchars($row['product_name']); ?></p>
                        <p><?php echo htmlspecialchars($row['units']); ?></p>
                        <button class="add-to-cart" onclick="location.href='./Customer/Cart/productview.php?id=<?php echo $row['product_id']; ?>';">
                            View Product
                        </button>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>


        </div>
    </section>

    <!--End of Best Selling Products Section-->

    <!--Offers Area-->
    <div class="title-sec">
        <h2 class="section-title" style="font-family: poppins;">Daily Offers</h2>
    </div>
    <div class="swiper">
        <div class="swiper-wrapper card-wrper">
            <!--Slide 01-->
            <?php
            while ($row = mysqli_fetch_assoc($data_promo)) {
                ?>
                <div class="swiper-slide">
                    <img src="./Admin/Assets/images/promotions/<?php echo $row['image']; ?>" alt="offer image">
                    <h2 class="topic"><?php echo $row['promo_title']; ?></h2>
                    <p class="text"><?php echo $row['description']; ?></p>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!--End of Offers Area-->

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
        <div class="container title-section" >
            <h2 class="section-title" style="font-family: poppins;">Contact Us</h2>
        </div><!-- End Section Title -->

        <div class="container" >

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <h4 class="mt-3">Address</h4>
                        <p>328/1/D, Kokiskade Junction, Kirillawala, Kandy Road.</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h4 class="mt-3">Call Us</h4>
                        <p>+94 33 267 8970</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h4 class="mt-3">Email Us</h4>
                        <p>sandarufoodmart@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3959.80522962877!2d79.987123!3d7.032164999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMDEnNTUuOCJOIDc5wrA1OScxMy42IkU!5e0!3m2!1sen!2slk!4v1737170173296!5m2!1sen!2slk"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="" method="post" class="php-email-form" >
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" >Send Message</button>
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
                        <li><a href="./Customer/aboutus/aboutus.php">About us</a></li>
                        <li><a href="#categories">Categories</a></li>
                        <li><a href="./Customer/aboutus/terms-of-service.php">Terms of service</a></li>
                        <li><a href="./Customer/aboutus/privacy-policy.php">Privacy policy</a></li>
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
    <script src="./Customer/Assets/js/offer.js"></script>
    <script src="./Customer/Assets/js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>