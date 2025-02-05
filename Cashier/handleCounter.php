<?php
// Include database connection
include("../Admin/Dashboard/db_con.php");

// Ensure JSON response format
header('Content-Type: application/json');

// Read input data (for POST requests)
$data = json_decode(file_get_contents("php://input"), true);

// Initialize response array
$response = ["success" => false, "message" => "Invalid request"];


// Get In-Progress Orders
if (isset($_GET['get_in_progress_orders']) && $_GET['get_in_progress_orders'] === 'true') {
    if (!$conn) {
        echo json_encode(["success" => false, "message" => "Database connection failed"]);
        exit;
    }

    // Fetch orders with status 'in-progress'
    $query = "SELECT id FROM orders WHERE status = 'in-progress' ORDER BY id ASC";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $orders = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $orders[] = $row['id'];
        }
        echo json_encode(["success" => true, "orders" => $orders]);
    } else {
        echo json_encode(["success" => false, "message" => "No in-progress orders found"]);
    }
    exit;
}




// ---------------------------------
// Get Last Order ID
// ---------------------------------
if (isset($_GET['get_last_id']) && $_GET['get_last_id'] === 'true') {
    if (!$conn) {
        $response = ["success" => false, "message" => "Database connection failed"];
    } else {
        $query = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $lastId = $row['id']; // Example: "O-00002"

            // Extract numeric part (remove "O-" prefix)
            $numericPart = intval(preg_replace('/[^0-9]/', '', $lastId));

            // Generate next ID
            $nextNumericId = $numericPart + 1;
            $formattedId = "O-" . str_pad($nextNumericId, 5, "0", STR_PAD_LEFT);

            $response = [
                "success" => true,
                "last_order_id" => $lastId,
                "next_order_id" => $formattedId
            ];
        } else {
            $response = [
                "success" => true,
                "last_order_id" => "O-00001",
                "next_order_id" => "O-00001"
            ];
        }
    }
}

// ---------------------------------
// Search Customer (By First & Last Name)
// ---------------------------------
elseif (isset($data['searchCustomer'])) {
    $searchTerm = mysqli_real_escape_string($conn, $data['searchCustomer']);

    $query = "SELECT id, first_name, last_name FROM customers 
              WHERE first_name LIKE '%$searchTerm%' OR last_name LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $customers = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $customers[] = $row;
        }
        $response = ["success" => true, "customers" => $customers];
    } else {
        $response = ["success" => false, "message" => "No customers found"];
    }
}

// ---------------------------------
// Search Product by Product ID
// ---------------------------------
elseif (isset($data['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $data['search']);

    $query = "SELECT product_id FROM products WHERE product_id LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
        $response = ["success" => true, "products" => $products];
    } else {
        $response = ["success" => false, "message" => "No products found"];
    }
}

// ---------------------------------
// Fetch Product Details (With Price Based on Retail/Wholesale)
// ---------------------------------
elseif (isset($data['product_id']) && isset($data['type'])) {
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
        $response = [
            "success" => true,
            "product" => [
                "name" => $product['product_name'],
                "retail_price" => $product['retail_price'],
                "wholesale_price" => $product['whole_price'],
            ],
            "price" => $price
        ];
    } else {
        $response = ["success" => false, "message" => "Product not found"];
    }
}

// ---------------------------------
// Output JSON Response
// ---------------------------------
echo json_encode($response);
exit;

?>