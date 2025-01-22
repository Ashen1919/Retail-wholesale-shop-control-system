<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Sandaru Food Mart</title>
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
            background: url('../Assets/images/privacy_policy.jpg');
            background-size: cover;
            background-position: center;
            color: black;
            padding: 30px 0;
            margin-bottom: 40px;
            position: relative;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: black;
            text-decoration: none;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: white;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
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
                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                </ol>
            </nav>
            <h1 class="hero-title">Privacy Policy</h1>
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
                        <li><a href="#collection">Information Collection</a></li>
                        <li><a href="#usage">Information Usage</a></li>
                        <li><a href="#sharing">Information Sharing</a></li>
                        <li><a href="#security">Data Security</a></li>
                        <li><a href="#cookies">Cookies and Tracking</a></li>
                        <li><a href="#rights">Your Rights</a></li>
                        <li><a href="#changes">Policy Changes</a></li>
                        <li><a href="#contact">Contact Information</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="content-container">
                    <div class="terms-section" id="collection">
                        <h2>1. Information We Collect</h2>
                        <p>We collect information that you provide directly to us, including:</p>
                        <p>- Personal identification information (name, email address, phone number)<br>
                        - Delivery address information<br>
                        - Payment information<br>
                        - Shopping preferences and history</p>
                    </div>

                    <div class="terms-section" id="usage">
                        <h2>2. How We Use Your Information</h2>
                        <p>We use the collected information to:</p>
                        <p>- Process and fulfill your orders<br>
                        - Communicate with you about orders and services<br>
                        - Send promotional communications (with your consent)<br>
                        - Improve our services and customer experience<br>
                        - Protect against fraudulent transactions</p>
                    </div>

                    <div class="terms-section" id="sharing">
                        <h2>3. Information Sharing</h2>
                        <p>We do not sell or rent your personal information to third parties. We may share your information with:</p>
                        <p>- Delivery partners to fulfill orders<br>
                        - Payment processors for secure transactions<br>
                        - Service providers who assist our operations</p>
                    </div>

                    <div class="terms-section" id="security">
                        <h2>4. Data Security</h2>
                        <p>We implement appropriate security measures to protect your personal information. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
                    </div>

                    <div class="terms-section" id="cookies">
                        <h2>5. Cookies and Tracking</h2>
                        <p>We use cookies and similar technologies to improve user experience and analyze website traffic. You can control cookie settings through your browser preferences.</p>
                    </div>

                    <div class="terms-section" id="rights">
                        <h2>6. Your Rights</h2>
                        <p>You have the right to:</p>
                        <p>- Access your personal information<br>
                        - Correct inaccurate information<br>
                        - Request deletion of your information<br>
                        - Opt-out of marketing communications</p>
                    </div>

                    <div class="terms-section" id="changes">
                        <h2>7. Changes to Privacy Policy</h2>
                        <p>We may update this privacy policy periodically. We will notify you of any material changes by posting the new policy on this page.</p>
                    </div>

                    <div class="terms-section" id="contact">
                        <h2>8. Contact Us</h2>
                        <p>If you have questions about this Privacy Policy, please contact us at:<br>
                        Email: sandarufoodmart@gmail.com<br>
                        Phone: +94 33 267 8970<br>
                        Address: 328/1/D, Kokiskade Junction, Kirillawala, Kandy Road.</p>
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