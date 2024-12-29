<?php
session_start();
session_destroy();
header("Location: login.html"); // Redirect to login page
exit;
?>
