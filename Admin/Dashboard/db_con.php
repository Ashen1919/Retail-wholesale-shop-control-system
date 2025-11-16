<?php
    $db_server = "sql300.infinityfree.com";
    $db_user = "if0_40430873";
    $db_password = "5AtOP4p1s1Rm1";
    $db_database = "if0_40430873_FoodmartDB";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }
    catch(mysqli_sql_exception) {
        echo "database is not connected";
    }

?>