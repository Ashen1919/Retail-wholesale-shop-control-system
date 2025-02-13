<?php 
session_start();
session_destroy();

header("location:../Customer/login_signup_page/login_signup_page.php");
?>