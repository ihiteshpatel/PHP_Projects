<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplilearn OOPs Concept</title>
</head>
<body>
    <h1>The Fruit Program</h1>
    <?php
        class Fruit {
            public $name;
            public $color;

            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
        }
        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
    ?> 
</body>
</html>