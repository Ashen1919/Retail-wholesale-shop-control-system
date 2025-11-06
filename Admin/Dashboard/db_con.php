<?php
    $db_server = "db31641.public.databaseasp.net";
    $db_user = "db31641";
    $db_password = "b%8N4xL+o?5X";
    $db_database = "db31641";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }
    catch(mysqli_sql_exception) {
        echo "database is not connected";
    }

?>