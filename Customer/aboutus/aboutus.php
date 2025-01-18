<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="../Assets/css/aboutus.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <!--Image section-->
    <div class="image-section">
        <div class="about-text">
            <div class="url"><a href="./index.php">Home</a> &nbsp;/ About Us</div>
            <h1>About Us</h1>
        </div>
        <div class="image">
            <img src="../Assets/images/vege-cover01.jpg" alt="">
        </div>
    </div>

    <!--Content section-->
    <div class="content-section">
        <!--First section-->
        <div class="story-section">
            <img src="../Assets/images/our-story.png" alt="Our story image">
            <div class="story-content">
                <h3 style="font-weight:600; margin-bottom:20px;">Our Story</h3>
                <p style="text-align:justify;">Welcome to Sandaru Food Mart, where quality, value, and customer
                    satisfaction are at the heart of everything we do. Established with a vision to serve both retail
                    and wholesale customers, we have become a trusted name for all your grocery and household needs.

                    Our journey began with a commitment to provide fresh, high-quality products at affordable prices.
                    Over the years, we have expanded our offerings to include a wide range of local and international
                    goods, catering to families, businesses, and communities alike.

                    At Sandaru Food Mart, we believe in creating a seamless shopping experience. Whether you visit us
                    in-store or shop online, you’ll find exceptional service, diverse products, and convenient options
                    tailored to your needs.

                    We are proud to support local suppliers and offer personalized solutions for bulk purchases. Join us
                    as we continue to grow and serve you better every day! </p>
            </div>
        </div>
        <!--Second section-->
        <div class="story-section">
            <div class="story-content">
                <h3 style="font-weight:600; margin-bottom:20px;">Why Choose Us?</h3>
                <p style="text-align:justify; margin-bottom:10px;">At Sandaru Food Mart, we prioritize quality,
                    affordability, and
                    convenience. With a wide range of fresh and trusted products, we cater to both retail and wholesale
                    needs. Enjoy seamless shopping, exceptional customer service, and flexible delivery options.
                    Experience a trusted partner dedicated to meeting all your grocery and bulk purchasing needs. </p>
                <div class="choose">
                    <i class="bi bi-check2-circle"></i>
                    <p>Fast Delivery</p>
                </div>
                <div class="choose">
                    <i class="bi bi-check2-circle"></i>
                    <p>100% Secure Payment</p>
                </div>
                <div class="choose">
                    <i class="bi bi-check2-circle"></i>
                    <p>Quality Guarantee</p>
                </div>
                <div class="choose">
                    <i class="bi bi-check2-circle"></i>
                    <p>Daily Offers</p>
                </div>
            </div>
            <img src="../Assets/images/why-choose-us.png" alt="Our story image">
        </div>
    </div>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>