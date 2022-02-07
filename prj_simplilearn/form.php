<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php
        // define variables and set to empty values
        $fullname=$email=$gender=$comment=$number=$age=$website="";
        $nameErr=$emailErr=$genderErr=$websiteErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameErr = "Please enter a valid name";
            } else {
                $fullname = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
                        $nameErr = "Only letters and whitespace allowed.";
                }
            }
            if(empty($_POST["email"])) {
                $emailErr = "Valid Email Address";
            } else {
                $email = test_input($_POST["email"]);
                // check if email-address is well-formed
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "The e-mail address is incorrect";
                }
            }
            if(empty($_POST["website"])) {
                $website="";
            } else {
                $website = test_input($_POST["website"]);
                // check if website URL is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Enter a valid website URL";
                }
            }
            if(empty($_POST["gender"])) {
                $genderErr = "Please select a gender";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        
        $number = test_input($_POST["number"]);
        $comment = test_input($_POST["comment"]);
        $age = test_input($_POST["age"]);
        }  
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>Form Validation</h2>
    <p><span class="error">* Required Field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Full Name: <input type="text" name="name">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        Number (optional): <input type="text" name="number">
        <br><br>
        Age: <input type="text" name="age">
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="10" cols="30"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <span class="error"><?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="Click here" value="Click here">
    </form>
    <?php
        echo "<h2> Your Input: </h2>";
        echo $fullname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $number;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $age;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $website;
        echo "<br>";
    ?>
</body>
</html>