<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'your_database');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$userID = $_SESSION['userID']; // Get logged-in user's ID
$sql = "DELETE FROM accounts WHERE id = $userID";

if ($conn->query($sql) === TRUE) {
    echo "Account deleted successfully.";
    session_destroy(); // Log out the user
    header("Location: register.html"); // Redirect to registration page
} else {
    echo "Error deleting account: " . $conn->error;
}

$conn->close();
?>
