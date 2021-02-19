<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 12</title>
</head>
<body>
    <?php
        require 'point.php';

        $first = 5;
        $second = &$first;
        $second = 3;
        echo $first;

        // $first = new Point;
        // $first->x=3;
        // $first->y=3;

        // $second = $first;
        // $second->x=5;
        // $second->y=5;

        // echo "x: {$second->x}, y: {$second->y}";
    ?>
</body>
</html>