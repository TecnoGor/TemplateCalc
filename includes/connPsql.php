<?php
    $host       = "10.16.12.155";
    $port       = 5432;
    $dbname     = "geopostal";
    $username   = "postgres";
    $password   = "g30P0stgr3s";

    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

    if(!$conn){
        echo "Error connecting to database: " . pg_last_error();
        exit;
    }


?>