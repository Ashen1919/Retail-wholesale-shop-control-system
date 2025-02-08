<?php
// Include database connection
include("../Admin/Dashboard/db_con.php");

// Ensure JSON response format
header('Content-Type: application/json');

// Read input data (for POST requests)
$data = json_decode(file_get_contents("php://input"), true);

// Initialize response array
$response = ["success" => false, "message" => "Invalid request"];

// Debugging: Check received GET parameters
if (!empty($_GET)) {
    error_log("Received GET parameters: " . json_encode($_GET));
}

// ---------------------------------
// Get In-Progress Orders
// ---------------------------------
if (isset($_GET['get_in_progress_orders'])) {
    error_log("Fetching in-progress orders...");

    $query = "SELECT bill_number FROM bills WHERE status = 'in-progress' ORDER BY bill_number ASC";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $orders = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $orders[] = $row['bill_number'];
        }

        echo json_encode(["success" => true, "orders" => $orders]);
        exit;
    } else {
        echo json_encode(["success" => false, "message" => "Database error: " . mysqli_error($conn)]);
        exit;
    }
}

// ---------------------------------
// Fetch Bill Details
// ---------------------------------
elseif (isset($_GET['fetch_bill_details']) && isset($_GET['bill_number'])) {
    $billNumber = mysqli_real_escape_string($conn, $_GET['bill_number']);
    error_log("Fetching details for bill: " . $billNumber);

    $query = "SELECT * FROM bills WHERE bill_number = '$billNumber'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $billDetails = mysqli_fetch_assoc($result);
        echo json_encode(["success" => true, "bill" => $billDetails]);
    } else {
        echo json_encode(["success" => false, "message" => "No details found for this bill."]);
    }
    exit;
}

// Add this to your existing handleCounter.php file
elseif (isset($data['searchCustomerByNIC'])) {
    $nic = mysqli_real_escape_string($conn, $data['searchCustomerByNIC']);
    
    $query = "SELECT name, phone FROM wholesale_customers WHERE nic = '$nic'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $customer = mysqli_fetch_assoc($result);
        $response = ["success" => true, "customer" => $customer];
    } else {
        $response = ["success" => false, "message" => "Customer not found"];
    }
}

// ---------------------------------
// Get Last Bill Number
// ---------------------------------
elseif (isset($_GET['get_last_id']) && $_GET['get_last_id'] === 'true') {
    if (!$conn) {
        $response = ["success" => false, "message" => "Database connection failed"];
    } else {
        $query = "SELECT bill_number FROM bills ORDER BY bill_number DESC LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $lastId = $row['bill_number'];

            // Extract numeric part (remove "B-" prefix)
            $numericPart = intval(preg_replace('/[^0-9]/', '', $lastId));

            // Generate next ID
            $nextNumericId = $numericPart + 1;
            $formattedId = "B-" . str_pad($nextNumericId, 5, "0", STR_PAD_LEFT);

            $response = [
                "success" => true,
                "last_order_id" => $lastId,
                "next_order_id" => $formattedId
            ];
        } else {
            $response = [
                "success" => true,
                "last_order_id" => "B-00001",
                "next_order_id" => "B-00001"
            ];
        }
    }
}

// ---------------------------------
// Search Wholesale Customer (By Name)
// ---------------------------------
elseif (isset($data['searchCustomer'])) {
    $searchTerm = mysqli_real_escape_string($conn, $data['searchCustomer']);

    $query = "SELECT name, nic, phone FROM wholesale_customers WHERE name LIKE '%$searchTerm%'";
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
