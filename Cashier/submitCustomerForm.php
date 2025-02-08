<?php
include("../Admin/Dashboard/db_con.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $nic = $conn->real_escape_string($_POST['nic']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO wholesale_customers (name, nic, phone, email) 
            VALUES ('$name', '$nic', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Customer added successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }

    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>
