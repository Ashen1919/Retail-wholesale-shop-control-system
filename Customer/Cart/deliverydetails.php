<?php
session_start();
error_reporting(0);

//Database connection
$conn = mysqli_connect("sql300.infinityfree.com", "if0_40430873", "5AtOP4p1s1Rm1", "if0_40430873_FoodmartDB");

//generate auto-generated ID
$auto_sql = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
$result_auto = mysqli_query($conn, $auto_sql);

if (mysqli_num_rows($result_auto) > 0) {
    $rows = $result_auto->fetch_assoc();
    $lastid = $rows['id'];
    $num = (int) substr($lastid, 2);
    $new_id = 'O-' . str_pad($num + 1, 5, '0', STR_PAD_LEFT);
} else {
    $new_id = 'O-00001';
}

date_default_timezone_set('Asia/Kolkata');

//Order placing process
if (isset($_POST['pay-btn'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $p_code = $_POST['p_code'];
    $contact = $_POST['contact'];
    $email = $_SESSION['user_email'];
    $lending_amount = 0;
    $payment = "pending";
    $_SESSION['order_id'] = $new_id;
    $type = "retail";
    $status = "pending";
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $total = $_POST['total'];
    $cart = $_POST['cart'];

    //sql query
    $order_sql = "INSERT INTO orders(id, type, status, payment, name, email, date, time, phone_number, address, city, p_code, order_details, lending_amount, full_amount) VALUES('$new_id', '$type', '$status', '$payment', '$name', '$email', '$date', '$time', '$contact', '$address', '$city', '$p_code', '$cart', '$lending_amount', '$total')";
    $res_order = mysqli_query($conn, $order_sql);

    if ($res_order) {
        // Process the cart data (product_id=quantity format)
        $cart_items = explode("&", $cart);

        foreach ($cart_items as $item) {
            list($product_id, $quantity) = explode("=", $item);

            // Convert quantity to integer
            $quantity = (int) $quantity;

            // Update product stock in the database
            $update_stock_sql = "UPDATE products SET quantity = quantity - $quantity WHERE product_id = '$product_id'";
            mysqli_query($conn, $update_stock_sql);
        }

        // Redirect after successful order
        header("location: ./conformmsg.php");
        exit();
    } else {
        $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Oops! something went wrong",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Details - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">
    <!-- CSS Files -->
    <link href="../Assets/css/cart_style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .delivery-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 70px auto;
            width: 100%;
            max-width: 900px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

        }

        .form-section {
            background-color: #2c2c6c;
            padding: 20px;
            border-radius: 10px;
            color: white;
            width: 50%;
        }

        .form-section .cancel-btn {
            padding: 10px;
            border-radius: 20px;
            background-color: #f8f9fa;
            font-weight: bold;
            border: none;
        }

        .form-control {
            background-color: #dcdcdc;
            border: none;
            border-radius: 5px;
        }

        .progress-section {
            text-align: center;
            width: 40%;
        }

        .progress-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ddd;
            display: inline-block;
            line-height: 50px;
            color: #000;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .btn-cancel {
            background-color: rgb(231, 84, 21);
            border: none;
            color: white;
        }

        .btn-confirm {
            background-color: #00ff00;
            border: none;
            color: black;
        }

        .track-button {
            background-color: #57e37c;
            border: none;
            border-radius: 10px;
            color: black;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
        }

        .track-button img {
            margin-left: 10px;
        }

        @media(max-width:481px) {
            .delivery-container {
                display: block;
                max-width: 100%;
                margin: 10px 10px;
            }

            .form-section {
                width: 100%;
            }

            .progress-section {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>
    <div class="delivery-container">
        <div class="form-section">
            <h4 class="text-center">Delivery Details</h4>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City:</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="postalCode" class="form-label">Postal Code:</label>
                    <input type="text" name="p_code" id="postalCode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="contactNumber" class="form-label">Contact Number:</label>
                    <input type="text" name="contact" id="contactNumber" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button onclick="location.href = './checkout.php'" type="button"
                        class="btn btn-cancel cancel-btn">Cancel</button>
                    <button type="submit" name="pay-btn" class="btn btn-confirm cancel-btn">Confirm Order</button>
                </div>
                <input type="hidden" name="total" id="total-hidden">
                <input type="hidden" name="cart" id="cart-hidden">
            </form>
        </div>

        <div class="progress-section">
            <div>
                <span class="progress-circle">1</span>
                <p>Prepare Order</p>
            </div>
            <div>
                <span class="progress-circle">2</span>
                <p>Ready Order</p>
            </div>
            <div>
                <span class="progress-circle">3</span>
                <p>Order Delivery</p>
            </div>
            <a href="#" class="track-button">
                <h4 style="font-weight:600; margin-top: 10px;">Track Your Order</h4>
                <img src="..\Assets\images\cart images\truck-d.png" alt="Delivery Icon" height="35">
            </a>
        </div>
    </div>

    <script src="../Assets/js/script.js"></script>


    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Retrieve the total and cart values from localStorage
            var total = localStorage.getItem('total');
            var cart = localStorage.getItem('cart');

            // Set the values to the hidden input fields
            if (total && cart) {
                document.getElementById("total-hidden").value = total;
                document.getElementById("cart-hidden").value = cart;
            } else {
                console.log("No total or cart data found in localStorage.");
            }
        });
    </script>

</body>

</html>