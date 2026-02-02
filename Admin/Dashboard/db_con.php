<?php
    $db_server = "sql103.infinityfree.com";
    $db_user = "if0_41029296";
    $db_password = "B1bzeFTatJgPH";
    $db_database = "if0_41029296_shop_db";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }
    catch(mysqli_sql_exception) {
        echo "database is not connected";
    }

?>