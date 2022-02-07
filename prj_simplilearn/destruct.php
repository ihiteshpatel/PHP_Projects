<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplilearn OOPs Concept - Constructor</title>
</head>
<body>
    <h1>The Fruit Program</h1>
    <?php
        class Fruit {
            public $name;
            public $color;
            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
            function __destruct() {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
        $strawberry = new Fruit ("Strawberry", "Pink");
    ?>
</body>
</html>