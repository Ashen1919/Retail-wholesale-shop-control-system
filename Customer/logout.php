<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <script>
        // Clear localStorage and sessionStorage
        localStorage.clear();
        sessionStorage.clear();

        // Redirect after clearing storage
        window.location.href = "../index.php";
    </script>
</head>
<body>
</body>
</html>
