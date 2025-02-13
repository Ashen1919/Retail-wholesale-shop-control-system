<?php
include("../Admin/Dashboard/db_con.php"); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = mysqli_real_escape_string($conn, $_POST['nic']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    // Insert into database
    $query = "INSERT INTO repayments (nic, date, amount) VALUES ('$nic', '$date', '$amount')";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => mysqli_error($conn)]);
    }

    mysqli_close($conn);
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
