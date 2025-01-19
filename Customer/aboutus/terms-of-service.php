<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Sandaru Food Mart</title>
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color:rgb(100, 100, 100);
            --secondary-color:rgb(199, 199, 199);
            --text-color: #333;
            --light-bg: #f5f5f5;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(to right, #2196f3, #f51616);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 10px 0;
            margin-bottom: 40px;
            position: relative;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
            margin-bottom: 20px;
            text-align: left;
        }

        .breadcrumb a {
            color: #000;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #000;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: #000;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 500;
            margin-bottom: 20px;
            color: #fff;
        }

        .last-updated {
            font-size: 0.9rem;
            text-align: right;
            margin-top: -40px;
            padding-right: 20px;
        }

        /* Content Section */
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .section-title {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: none;
        }

        .content-section {
            margin-bottom: 40px;
        }

        .content-section p {
            color: var(--text-color);
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .sidebar {
            position: sticky;
            top: 20px;
            background: var(--light-bg);
            padding: 20px;
            border-radius: 8px;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
        }

        .sidebar-nav li {
            margin-bottom: 10px;
        }

        .sidebar-nav a {
            color: var(--text-color);
            text-decoration: none;
            display: block;
            padding: 8px 15px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .sidebar-nav a:hover {
            background: var(--secondary-color);
            color: white;
        }

        .sidebar-nav a.active {
            background: var(--primary-color);
            color: white;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .sidebar {
                position: static;
                margin-bottom: 30px;
            }

            .last-updated {
                margin-top: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms of Service</li>
                </ol>
            </nav>
            <h1 class="hero-title">Terms of Service</h1>
            <p class="last-updated">Last Updated: January 19, 2025</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="sidebar-nav">
                        <li><a href="#acceptance">Acceptance of Terms</a></li>
                        <li><a href="#use">Use of Services</a></li>
                        <li><a href="#pricing">Pricing and Payment</a></li>
                        <li><a href="#delivery">Delivery</a></li>
                        <li><a href="#returns">Returns and Refunds</a></li>
                        <li><a href="#account">Account Management</a></li>
                        <li><a href="#products">Product Information</a></li>
                        <li><a href="#modifications">Modifications</a></li>
                        <li><a href="#contact">Contact Information</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="content-container">
                    <div class="terms-section" id="acceptance">
                        <h2>1. Acceptance of Terms</h2>
                        <p>By accessing and using Sandaru Food Mart's website and services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>
                    </div>

                    <div class="terms-section" id="use">
                        <h2>2. Use of Services</h2>
                        <p>Our services are available for both retail and wholesale customers. You must be at least 18 years old to make purchases. All orders are subject to availability and confirmation of the order price.</p>
                    </div>

                    <div class="terms-section" id="pricing">
                        <h2>3. Pricing and Payment</h2>
                        <p>All prices are in LKR and include applicable taxes. We reserve the right to modify prices without notice. Payment must be made in full at the time of purchase through our accepted payment methods.</p>
                    </div>

                    <div class="terms-section" id="delivery">
                        <h2>4. Delivery</h2>
                        <p>Delivery times are estimates only. We are not responsible for delays beyond our control. Risk of loss and title for items pass to you upon delivery to the carrier.</p>
                    </div>

                    <div class="terms-section" id="returns">
                        <h2>5. Returns and Refunds</h2>
                        <p>Products can be returned within 24 hours if damaged or incorrect. Perishable items cannot be returned unless damaged upon delivery. Refunds will be processed within 7 business days.</p>
                    </div>

                    <div class="terms-section" id="account">
                        <h2>6. Account Management</h2>
                        <p>You are responsible for maintaining the confidentiality of your account information and password. You must notify us immediately of any unauthorized use of your account.</p>
                    </div>

                    <div class="terms-section" id="products">
                        <h2>7. Product Information</h2>
                        <p>We strive to display accurate product information but cannot guarantee all information is complete and error-free. We reserve the right to limit quantities of any product.</p>
                    </div>

                    <div class="terms-section" id="modifications">
                        <h2>8. Modifications</h2>
                        <p>We reserve the right to modify these terms at any time. Continued use of our services after changes constitutes acceptance of the modified terms.</p>
                    </div>

                    <div class="terms-section" id="contact">
                        <h2>9. Contact Information</h2>
                        <p>For questions about these Terms of Service, please contact us at:<br>
                           Email: sandarufoodmart@gmail.com<br>
                           Phone: +94 33 267 8970</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Smooth scroll for sidebar navigation
            $('.sidebar-nav a').on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800);

                    
                    $('.sidebar-nav a').removeClass('active');
                    $(this).addClass('active');
                }
            });

            
            $(window).on('scroll', function () {
                var scrollPosition = $(window).scrollTop();
                $('.terms-section').each(function () {
                    var sectionTop = $(this).offset().top - 150;
                    var sectionBottom = sectionTop + $(this).outerHeight();
                    var id = $(this).attr('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        $('.sidebar-nav a').removeClass('active');
                        $('.sidebar-nav a[href="#' + id + '"]').addClass('active');
                    }
                });
            });
        });
    </script>
</body>
</html>
