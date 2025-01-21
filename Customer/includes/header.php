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
    <link href="../Assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <!--Preloader-->
    
    <!--End of Preloader-->
    <!--Header-->
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
                <a href="../../index.php"><img
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
                    <li><a href="../../index.php" class="active">Home<br></a></li>
                    <li><a href="../aboutus/aboutus.php">About us</a></li>
                    <li class="dropdown"><a href="#"><span>Categories</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../Categories/Grocery.php">Grocery</a></li>
                            <li><a href="../Categories/Vegetables.php">Vegetables</a></li>
                            <li><a href="../Categories/Fruits.php">Fruits</a></li>
                            <li><a href="../Categories/Beverages.php">Beverages</a></li>
                            <li><a href="../Categories/Household.php">Household</a></li>
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

    


    <script src="../Assets/js/script.js"></script>

    
</body>

</html>