<?php
session_start();
error_reporting(0);

//Database connection
$conn = mysqli_connect("sql300.infinityfree.com", "if0_40430873", "5AtOP4p1s1Rm1", "if0_40430873_FoodmartDB");

/*
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
    $_SESSION['order_id'] = $new_id;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['p_code'] = $_POST['p_code'];
    $_SESSION['contact'] = $_POST['contact'];
}
    //payment details
    $card_number = "4635-6040-1234-5678";
    $card_name = "nextwave";
    $expire_date = "08/29";
    $cvv = "123";

    if ($_POST['card-number'] === $card_number && $_POST['card-name'] === $card_name && $_POST['expire'] === $expire_date && $_POST['cvv'] === $cvv) {
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

    } else {
        $message = '<script>
                document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Your card details are wrong.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- CSS Files -->
    <link href="../Assets/css/checkout.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .user-info {
            display: block;
            justify-self: center;
            gap: 20px;
            margin: 10px 0px;
            width: 400px;
        }

        .user-info button {
            width: 100%;
            display: flex;
            justify-content: center;
            align-self: center;
        }

        .payment-form {
            background: rgb(209, 239, 250);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .payment-form .form-label {
            font-weight: bold;
        }

        .payment-form .btn {
            width: 100%;
        }

        .form-section {
            background-color: #2c2c6c;
            padding: 20px;
            border-radius: 10px;
            color: white;
            width: 100%;
            max-width: 600px;
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

        @media (max-width:481px) {
            .user-info {
                display: block;
                justify-self: center;
            }

            .payment-form {
                margin-top: 15px;
            }
        }
    </style>


</head>

<body>

    <?php if (isset($message))
        echo $message; ?>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <body>
        <div class="user-info">
            <div class="form-section">
                <form action="./stripe_charge.php" method="POST">
                    <h4 class="text-center">Delivery Details</h4>
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
                    <input type="hidden" name="total" id="total-hidden">
                    <input type="hidden" name="cart" id="cart-hidden">

                    <button type="submit" name="pay-btn" class="btn btn-primary">Pay with Stripe</button>
                </form>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Include Footer -->
        <?php include '../includes/footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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