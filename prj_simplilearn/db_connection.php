<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "prj_simplilearn";

    $connection = mysqli_connect($servername, $username, $password, $db_name);

    if (!$connection) {
        echo "Connection failed";
    }