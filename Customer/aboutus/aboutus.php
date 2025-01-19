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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

    <!-- Slider main container -->
    <div class="swiper">
        <h3 class="top">User Feedbacks</h3>
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="rating">
                    ⭐⭐⭐⭐
                </div>
                <div class="comment">
                    <p>The shop has a great variety of products, excellent customer service, and fast delivery. Highly
                        recommended for online shopping!</p>
                </div>
                <div class="image-feedback">
                    <img src="../Assets/images/feedback/951.jpg" alt="Person">
                </div>
                <div class="name">
                    <h5>Jane Smith</h5>
                </div>
                <div class="job">
                    <p>Software Engineer</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rating">
                    ⭐⭐⭐⭐⭐
                </div>
                <div class="comment">
                    <p>I appreciate the friendly staff and the organized store layout. Prices are fair, and I’ll
                        definitely shop here again.</p>
                </div>
                <div class="image-feedback">
                    <img src="../Assets/images/feedback/3546.jpg" alt="Person">
                </div>
                <div class="name">
                    <h5>Jacob Oram</h5>
                </div>
                <div class="job">
                    <p>Civil Engineer</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rating">
                    ⭐⭐⭐
                </div>
                <div class="comment">
                    <p>Delivery was quick, and the product quality exceeded my expectations. The online system is
                        user-friendly and hassle-free.</p>
                </div>
                <div class="image-feedback">
                    <img src="../Assets/images/feedback/16320.jpg" alt="Person">
                </div>
                <div class="name">
                    <h5>Micheal Clark</h5>
                </div>
                <div class="job">
                    <p>Doctor</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rating">
                    ⭐⭐⭐⭐⭐
                </div>
                <div class="comment">
                    <p>Great in-store experience! Staff were helpful, and checkout was quick. I found everything I
                        needed without any issues.</p>
                </div>
                <div class="image-feedback">
                    <img src="../Assets/images/feedback/18778.jpg" alt="Person">
                </div>
                <div class="name">
                    <h5>Harry Fernando</h5>
                </div>
                <div class="job">
                    <p>Businessman</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rating">
                    ⭐⭐⭐⭐⭐
                </div>
                <div class="comment">
                    <p>The inventory is well-stocked, and customer support was responsive. Online orders are processed
                        efficiently, and tracking was accurate.</p>
                </div>
                <div class="image-feedback">
                    <img src="../Assets/images/feedback/56066.jpg" alt="Person">
                </div>
                <div class="name">
                    <h5>Ann Steven</h5>
                </div>
                <div class="job">
                    <p>Teacher</p>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!--Review add section-->
    <div class="review-section">
        <h3 class="top">Leave a Review</h3>
        <div class="body-content">
            <div class="review-image">
                <img src="../Assets/images/review.png" alt="Review Image">
            </div>
            <form action="" method="post">
                <div class="details">
                    <div class="names-details">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="names-details">
                        <label for="name">Occupation:</label>
                        <input type="text" name="name" id="name" placeholder="Your occupation">
                    </div>

                </div>
                <div class="rate">
                    <label for="name">Rating:</label>
                    <select name="rating" id="rating">
                        <option value="rating">1</option>
                        <option value="rating">2</option>
                        <option value="rating">3</option>
                        <option value="rating">4</option>
                        <option value="rating">5</option>
                    </select>
                </div>
                <div class="feedback">
                    <label for="name">Your Feedback:</label>
                    <textarea name="feedback" id="feedback" placeholder="Your Feedback"></textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper('.swiper', {

            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }

        });
    </script>
    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>