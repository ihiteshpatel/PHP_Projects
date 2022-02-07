<?php
    include "db_connection.php";
    if(isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $userid = $_POST['userid'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "UPDATE employee SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender' WHERE id = '$userid'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "Record updated successfully";
        } else {
            echo "Error in update data";
        }
    }
    if(isset($_GET['id'])) {
        $userid = $_GET['id'];
        $select = "SELECT * FROM employee WHERE id = '$userid'";
        $query = mysqli_query($connection, $select);
        if ($query->num_rows>0) {
            while($row=$query->fetch_assoc()) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
                $id = $row['id'];
            }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup Form</title>
    </head>
    <body>
        <h2>User Update Form</h2>
        <form method="POST"> 
            <fieldset>
                <legend>Personal Information:</legend>
                First Name: <br>
                <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                <input type="hidden" name="userid" value="<?php echo $id; ?>">
                <br>
                Last Name: <br>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                <br>
                Email: <br>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <br>
                Password: <br>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <br>
                Gender: <br>
                <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {echo "checked"; } ?>>Male
                <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {echo "checked"; } ?>>Female
                <br><br>
                <input type="submit" name="update" value="Update">
            </fieldset>
        </form>
    </body>
</html>
<?php
    } else {
        header("Location: view.php");
    }
}
?>