<?php
    if(isset($_POST["name"]) || isset($_POST["age"])) {
        if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
            die("Invalid name");
        }
        echo "Hello".$_POST['name']."<br>";
        echo "Age:".$_POST['age']."years old.";
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POST method example</title>
    </head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            Name: <input type="text" name="name">
            Age: <input type="text" name="age">
            <input type="submit">
        </form>
    </body>
</html>