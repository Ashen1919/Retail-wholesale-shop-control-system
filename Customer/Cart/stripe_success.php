<?php
session_start();
require '../../vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51R6YUUCswnulFFr3MCt1iDHSfr4An8eYLIUvxwrQio6Vl0z6pPv8UzH4l5E4XcguwcJ4IPKLT0qj6ZgOP88qwM3700y8yOJAoV');

$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

// Get the session ID from URL
$session_id = $_GET['session_id'];

try {
    $session = \Stripe\Checkout\Session::retrieve($session_id);
    if ($session->payment_status === "paid") {
        $order_id = $_SESSION['order_id'];
        $cart = $_SESSION['cart'];
        $total = $_SESSION['total'];

        $email = $_SESSION['user_email'];
        $name = $_SESSION['name'];
        $address = $_SESSION['address'];
        $city = $_SESSION['city'];
        $p_code = $_SESSION['p_code'];
        $contact = $_SESSION['contact'];
        
        $type = "retail";
        $status = "pending";
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $payment = "paid";
        $lending_amount = 0;

        // Insert order into database
        $order_sql = "INSERT INTO orders(id, type, status, payment, name, email, date, time, phone_number, address, city, p_code, order_details, lending_amount, full_amount) 
                      VALUES('$order_id', '$type', '$status', '$payment', '$name', '$email', '$date', '$time', '$contact', '$address', '$city', '$p_code', '$cart', '$lending_amount', '$total')";
        mysqli_query($conn, $order_sql);

        // Update stock
        $cart_items = explode("&", $cart);
        foreach ($cart_items as $item) {
            list($product_id, $quantity) = explode("=", $item);
            $quantity = (int) $quantity;
            $update_stock_sql = "UPDATE products SET quantity = quantity - $quantity WHERE product_id = '$product_id'";
            mysqli_query($conn, $update_stock_sql);
        }

        // Redirect to confirmation page
        header("location: ./conformmsg.php");
        exit();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
