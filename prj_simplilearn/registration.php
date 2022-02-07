<?php
    include "db_connection.php";
    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO tutorial (firstname, lastname, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";
        $query = mysqli_query($connection, $sql);
        if ($query) {
            echo "New record added successfully";
        } else {
            echo "Error in insert data";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
    </head>
    <body>
        <h2>Registration Form</h2>
        <form action="" method="POST">
            <fieldset>
                <legend>Information:</legend>
                First Name:<br>
                    <input type="text" name="firstname">
                    <br>
                Last Name:<br>
                    <input type="text" name="lastname">
                    <br>
                Email:<br>
                    <input type="text" name="email">
                    <br>
                Password:<br>
                    <input type="password" name="password">
                    <br>
                Gender:<br>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>