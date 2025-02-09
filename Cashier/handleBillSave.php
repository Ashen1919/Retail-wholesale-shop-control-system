<?php
// handleBillSave.php
include("../Admin/Dashboard/db_con.php");
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $rawData = file_get_contents("php://input");
    $data = json_decode($rawData, true);
    
    if (!$data) {
        throw new Exception("Invalid JSON data received");
    }
    
    // Validate required fields
    $requiredFields = ['bill_number', 'date', 'time', 'product_details', 'total_amount'];
    foreach ($requiredFields as $field) {
        if (!isset($data[$field]) || trim($data[$field]) === '') {
            throw new Exception("Missing required field: $field");
        }
    }
    
    mysqli_begin_transaction($conn);
    
    // Sanitize inputs
    $bill_number = mysqli_real_escape_string($conn, $data['bill_number']);
    $nic = isset($data['nic']) ? mysqli_real_escape_string($conn, $data['nic']) : null;
    $date = mysqli_real_escape_string($conn, $data['date']);
    $time = mysqli_real_escape_string($conn, $data['time']);
    
    // Process product details
    $products = explode(',', $data['product_details']);
    $sanitized_products = [];
    
    foreach ($products as $product) {
        $parts = explode('|', trim($product));
        if (count($parts) !== 3) {
            throw new Exception("Invalid product details format");
        }
        
        // Validate and format each part
        $product_id = mysqli_real_escape_string($conn, trim($parts[0]));
        $quantity = number_format((float)$parts[1], 0, '.', '');
        $unit_price = number_format((float)$parts[2], 2, '.', '');
        
        if (!is_numeric($quantity) || !is_numeric($unit_price)) {
            throw new Exception("Invalid quantity or price format");
        }
        
        $sanitized_products[] = "{$product_id}|{$quantity}|{$unit_price}";
    }
    
    // Join sanitized products back together
    $product_details = implode(',', $sanitized_products);
    
    // Format numeric values
    $total_amount = number_format((float)$data['total_amount'], 2, '.', '');
    $lending_amount = number_format((float)($data['lending_amount'] ?? 0), 2, '.', '');
    $given_amount = number_format((float)$data['given_amount'], 2, '.', '');
    $balance = number_format((float)$data['balance'], 2, '.', '');
    
    // Get status from request, default to 'in-progress' if not specified
    $status = isset($data['status']) ? mysqli_real_escape_string($conn, $data['status']) : 'in-progress';
    
    // Save bill details
    $query = "REPLACE INTO bills (
        bill_number, 
        nic,
        date,
        time,
        product_details,
        total_amount,
        lending_amount,
        given_amount,
        balance,
        status
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        throw new Exception("Failed to prepare statement: " . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "sssssdddds",
        $bill_number,
        $nic,
        $date,
        $time,
        $product_details,
        $total_amount,
        $lending_amount,
        $given_amount,
        $balance,
        $status
    );
    
    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Failed to execute statement: " . mysqli_stmt_error($stmt));
    }
    
    // If there's a lending amount and NIC, save to lendings table
    if ($lending_amount > 0 && $nic) {
        $lending_query = "INSERT INTO lendings (nic, date, amount) VALUES (?, ?, ?)";
        $lending_stmt = mysqli_prepare($conn, $lending_query);
        
        if (!$lending_stmt) {
            throw new Exception("Failed to prepare lending statement: " . mysqli_error($conn));
        }
        
        mysqli_stmt_bind_param($lending_stmt, "ssd",
            $nic,
            $date,
            $lending_amount
        );
        
        if (!mysqli_stmt_execute($lending_stmt)) {
            throw new Exception("Failed to save lending information: " . mysqli_stmt_error($lending_stmt));
        }
    }
    
    // Verify the saved data
    $verify_query = "SELECT * FROM bills WHERE bill_number = ? LIMIT 1";
    $verify_stmt = mysqli_prepare($conn, $verify_query);
    mysqli_stmt_bind_param($verify_stmt, "s", $bill_number);
    mysqli_stmt_execute($verify_stmt);
    $verify_result = mysqli_stmt_get_result($verify_stmt);
    $saved_data = mysqli_fetch_assoc($verify_result);
    
    // Normalize strings for comparison
    $normalized_saved = preg_replace('/\s+/', '', $saved_data['product_details']);
    $normalized_input = preg_replace('/\s+/', '', $product_details);
    
    if ($normalized_saved !== $normalized_input) {
        error_log("Data verification failed. Expected: '$product_details', Got: '{$saved_data['product_details']}'");
        throw new Exception("Data verification failed");
    }
    
    mysqli_commit($conn);
    
    echo json_encode([
        "success" => true,
        "message" => "Bill saved successfully" . ($lending_amount > 0 ? " with lending information" : ""),
        "bill_number" => $bill_number,
        "product_details" => $saved_data['product_details']
    ]);
    
} catch (Exception $e) {
    if (isset($conn)) {
        mysqli_rollback($conn);
    }
    error_log("Error in handleBillSave.php: " . $e->getMessage());
    
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage(),
        "debug_info" => [
            "submitted_data" => $data ?? null,
            "error" => $e->getMessage(),
            "trace" => $e->getTraceAsString()
        ]
    ]);
}

if (isset($conn)) {
    mysqli_close($conn);
}
?>