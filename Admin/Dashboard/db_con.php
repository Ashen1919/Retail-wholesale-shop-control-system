<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_database = "sandaru1_retail_shop";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }
    catch(mysqli_sql_exception) {
        echo "database bot connected";
    }

?>