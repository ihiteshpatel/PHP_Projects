<?php
    include "db_connection.php";
    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
        $sql = "DELETE FROM employee WHERE id='$userid'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "Record deleted successfully";
        } else {
            echo "Error in delete data";
        }
    }
?>