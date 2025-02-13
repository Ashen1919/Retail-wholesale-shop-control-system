<?php

session_start();
error_reporting(0);
//DB connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//fetch customer details
$email = $_SESSION['user_email'];
$sql_fetch = "SELECT * FROM customers WHERE email = '" . $email . "'";
$res_fetch = mysqli_query($conn, $sql_fetch);
$row_fetch = mysqli_fetch_assoc($res_fetch);

//update customer data
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['Contact'];

    $image_name = $_FILES['image']['name'];
    $tmp = explode(".", $image_name);
    $newFileName = round(microtime(true)) . '.' . end($tmp);
    $uploadPath = "../Assets/images/customers/" . $newFileName;
    $move_image = move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);

    if ($move_image) {
        $sql_update_img = "UPDATE customers SET first_name = '" . $fname . "', last_name = '" . $lname . "', phone_number = '" . $contact . "', image = '" . $newFileName . "' WHERE email = '" . $email . "'";
        $res_update_img = mysqli_query($conn, $sql_update_img);

        if ($res_update_img) {
            header("location: Account I.php");
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Profile updated successfully",
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
                title: "Oops! Something went wrong",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>';
        }
    } else {
        $sql_update = "UPDATE customers SET first_name = '" . $fname . "', last_name = '" . $lname . "', phone_number = '" . $contact . "' WHERE email = '" . $email . "'";
        $res_update = mysqli_query($conn, $sql_update);

        if ($sql_update) {
            header("location: Account I.php");
            $message = '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Profile updated successfully",
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
                title: "Oops! Something went wrong",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>';
        }
    }
}

mysqli_close($conn);

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
    <link href="../Assets/css/Account.css" rel="stylesheet">
    <link href="../Assets/css/UpdateAccount.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <?php if (isset($message))
        echo $message; ?>

    <div class="profile-container">

        <!--Information Section -->
        <form action="Account I.php" method="post" enctype="multipart/form-data">
            <div class="information-section">

                <div class="personal-info-section">
                    <!-- Profile Section -->
                    <div class="profile-header">
                        <div class="profile-avatar">
                            <img src="../Assets/images/customers/<?php echo $row_fetch['image']; ?>"
                                alt="Profile Picture">
                            <input type="file" name="image" id="image" style="display:none;">
                            <button type="button" onclick="document.getElementById('image').click();">
                                <i class="bi bi-camera-fill"></i>
                            </button>
                        </div>

                        <div class="profile-info">
                            <h3>Welcome <span><?php echo $row_fetch['first_name']; ?></span></h3>

                        </div>
                    </div>
                    <!--Personal info-->
                    <div class="info-section">
                        <h4 style="margin-bottom: 10px;">Personal Information</h4>
                        <div class="info-fields">
                            <div class="info">
                                <label for="">First Name :</label>
                                <input type="text" name="fname" id="name"
                                    value="<?php echo $row_fetch['first_name']; ?>">
                            </div>
                            <div class="info">
                                <label for="">Last Name :</label>
                                <input type="text" name="lname" id="name"
                                    value="<?php echo $row_fetch['last_name']; ?>">
                            </div>
                            <div class="info">
                                <label for="">Email :</label>
                                <input type="text" name="Email" id="Email" value="<?php echo $row_fetch['email']; ?>"
                                    readonly>
                            </div>
                            <div class="info">
                                <label for="">Contact :</label>
                                <input type="text" name="Contact" id="Contact"
                                    value="<?php echo $row_fetch['phone_number']; ?>">
                            </div>
                            <div class="info">
                                <label for="">Account Status :</label>
                                <?php
                                if ($row_fetch['status'] == 'active') {
                                    ?>
                                    <p class="active-st">Active</p>
                                    <?php
                                } else {
                                    ?>
                                    <p class="disable-st">Disabled</p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        <button class="per-submit" name="update">Update</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

    <!--Script files-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/AccountI.js"></script>
    <script src="../Assets/js/UpdateAccount.js"></script>

</body>

</html>