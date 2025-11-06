<?php
    $db_server = "sql102.hstn.me";
    $db_user = "mseet_40350860";
    $db_password = "NT2KlmwHcXeQ";
    $db_database = "mseet_40350860_sandaru_food_mart";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);
    }
    catch(mysqli_sql_exception) {
        echo "database is not connected";
    }

?>