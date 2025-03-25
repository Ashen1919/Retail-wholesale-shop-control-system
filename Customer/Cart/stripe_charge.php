<?php
session_start();
require '../../vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51R6YUUCswnulFFr3MCt1iDHSfr4An8eYLIUvxwrQio6Vl0z6pPv8UzH4l5E4XcguwcJ4IPKLT0qj6ZgOP88qwM3700y8yOJAoV');

$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

// Generate auto-order ID
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
$_SESSION['order_id'] = $new_id;
$_SESSION['name'] = $_POST['name'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['p_code'] = $_POST['p_code'];
$_SESSION['contact'] = $_POST['contact'];

// Get POST data
$total = (int) ($_POST['total'] * 100); 
$cart = $_POST['cart'];

// Create Stripe Checkout Session
$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'lkr',
            'product_data' => ['name' => 'Order Payment'],
            'unit_amount' => $total,
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost/Retail-wholesale-shop-control-system/Customer/Cart/stripe_success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'http://localhost/Retail-wholesale-shop-control-system/Customer/Cart/stripe_cancel.php',
]);

$_SESSION['cart'] = $cart; 
$_SESSION['total'] = $_POST['total'];

// Redirect to Stripe
header("Location: " . $session->url);
exit();
?>
