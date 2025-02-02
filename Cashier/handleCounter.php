<?php
// handleCounter.php

// Include database connection
include("../Admin/Dashboard/db_con.php");

// Ensure JSON response format
header('Content-Type: application/json');

// Read input data
$data = json_decode(file_get_contents("php://input"), true);

// ---------------------------------
// Get Last Order ID
// ---------------------------------
if (isset($_GET['get_last_id']) && $_GET['get_last_id'] === 'true') {
    $query = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastId = intval($row['id']); // Convert to integer to prevent NaN
        $formattedId = "O-" . str_pad($lastId + 1, 5, "0", STR_PAD_LEFT);
        echo json_encode(["success" => true, "last_order_id" => $formattedId]);
    } else {
        // If no orders exist, start from "O-00001"
        echo json_encode(["success" => true, "last_order_id" => "O-00001"]);
    }
    exit;
}

// ---------------------------------
// Search Customer (By First & Last Name)
// ---------------------------------
if (isset($data['searchCustomer'])) {
    $searchTerm = mysqli_real_escape_string($conn, $data['searchCustomer']);

    $query = "SELECT id, first_name, last_name FROM customers 
              WHERE first_name LIKE '%$searchTerm%' OR last_name LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $customers = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $customers[] = $row;
        }
        echo json_encode(["success" => true, "customers" => $customers]);
    } else {
        echo json_encode(["success" => false, "message" => "No customers found"]);
    }
    exit;
}

// ---------------------------------
// Search Product by Product ID
// ---------------------------------
if (isset($data['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $data['search']);

    $query = "SELECT product_id FROM products WHERE product_id LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
        echo json_encode(["success" => true, "products" => $products]);
    } else {
        echo json_encode(["success" => false, "message" => "No products found"]);
    }
    exit;
}

// ---------------------------------
// Fetch Product Details (With Price Based on Retail/Wholesale)
// ---------------------------------
if (isset($data['product_id']) && isset($data['type'])) {
    $productId = mysqli_real_escape_string($conn, $data['product_id']);
    $type = mysqli_real_escape_string($conn, $data['type']);

    // Query to get product details from the database
    $query = "SELECT product_name, retail_price, whole_price FROM products WHERE product_id = '$productId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);

        // Determine price based on type (retail or wholesale)
        $price = ($type === 'retail') ? $product['retail_price'] : 
                 (($type === 'wholesale') ? $product['whole_price'] : null);

        // Return product details and the selected price
        echo json_encode([
            "success" => true,
            "product" => [
                "name" => $product['product_name'],
                "retail_price" => $product['retail_price'],
                "wholesale_price" => $product['whole_price'],
            ],
            "price" => $price
        ]);
    } else {
        echo json_encode(["success" => false, "message" => "Product not found"]);
    }
    exit;
}

// ---------------------------------
// If No Valid Request Found
// ---------------------------------
echo json_encode(["success" => false, "message" => "Invalid request"]);
?>
