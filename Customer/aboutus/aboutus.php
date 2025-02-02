<?php
//DB connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Auto generate review ID
$sql_feed = "SELECT review_id FROM reviews ORDER BY review_id DESC LIMIT 1";
$result_feed = mysqli_query($conn, $sql_feed);

if (mysqli_num_rows($result_feed) > 0) {
    $rows = $result_feed->fetch_assoc();
    $lastid = $rows['review_id'];
    $num = (int) substr($lastid, 2);
    $new_id = 'R-' . str_pad($num + 1, 4, '0', STR_PAD_LEFT);
} else {
    $new_id = 'R-0001';
}

//Add a review
if (isset($_POST['submit'])) {
    $r_id = $_POST['review_id'];
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    $status = 'pending';

    $def_image = 'profile_default.jpg';
    $image_name = $_FILES['cus-images']['name'];
    $tmp = explode(".", $image_name);
    $newFileName = round(microtime(true)) . '.' . end($tmp);
    $uploadPath = "../Assets/images/feedback/" . $newFileName;
    $move_image = move_uploaded_file($_FILES['cus-images']["tmp_name"], $uploadPath);

    if ($move_image) {
        $add_sql = "INSERT INTO reviews(review_id ,name, occupation, rating, feedback, status, image) VALUES ('$r_id' ,'$name', '$occupation', '$rating', '$feedback', '$status', '$newFileName')";
        $result_add = mysqli_query($conn, $add_sql);
    } else {
        $add_sql = "INSERT INTO reviews(review_id ,name, occupation, rating, feedback, status, image) VALUES ('$r_id' ,'$name', '$occupation', '$rating', '$feedback', '$status', '$def_image')";
        $result_add = mysqli_query($conn, $add_sql);
    }

    if ($result_add) {
        $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your Review has been submitted.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    } else {
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

//Fetch all reviews
$sql_rev = "SELECT * FROM reviews WHERE status = 'Accepted'";
$result = mysqli_query($conn, $sql_rev);
?>

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
    <?php if (isset($message)) echo $message; ?>

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
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $rating = intval($row['rating']);
                ?>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="rating">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                echo '⭐';
                            } else {
                                echo '☆';
                            }
                        }
                        ?>
                    </div>
                    <div class="comment">
                        <p><?php echo $row['feedback']; ?></p>
                    </div>
                    <div class="image-feedback">
                        <img src="../Assets/images/feedback/<?php echo $row['image']; ?>" alt="Person">
                    </div>
                    <div class="name">
                        <h5><?php echo $row['name']; ?></h5>
                    </div>
                    <div class="job">
                        <p><?php echo $row['occupation']; ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
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
            <form method="post" enctype="multipart/form-data">
                <div class="details">
                    <div class="names-details">
                        <input type="text" name="review_id" value="<?php echo $new_id; ?>" style="display:none;"
                            required>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" required >
                    </div>
                    <div class="names-details">
                        <label for="occupation">Occupation:</label>
                        <input type="text" name="occupation" id="occupation" placeholder="Your occupation" required >
                    </div>

                </div>
                <div class="rate">
                    <label for="name">Rating:</label>
                    <select name="rating" id="rating" required >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="feedback">
                    <label for="name">Your Feedback:</label>
                    <textarea name="feedback" id="feedback" placeholder="Your Feedback" required ></textarea>
                </div>
                <div class="cus-image" onclick="document.getElementById('cus-images').click()">
                    <img src="../Assets/images/feedback/add_image.jpg" alt="Add an image">
                    <input type="file" name="cus-images" id="cus-images" style="display: none;">
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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