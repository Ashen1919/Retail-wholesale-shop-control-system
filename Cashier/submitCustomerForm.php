<?php
include("../Admin/Dashboard/db_con.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $choice = $_POST['type'];

    $sql = "INSERT INTO customers (email, first_name, last_name, phone_number) 
            VALUES ('$email', '$firstName', '$lastName', '$phone', '$choice')";

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
