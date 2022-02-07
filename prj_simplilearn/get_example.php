<?php
    if(isset($_GET['name']) || isset($_GET['age'])) {
        echo "Hi".$_GET['name']."<br />";
        echo "Age:".$_GET['age']."years old.";
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET Method Example</title>
    </head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
            Name: <input type="text" name="name" />
            Age: <input type="text" name="age" />
            <input type="submit" />
        </form>
    </body>
</html>