<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 32</title>
</head>

<body>
    <?php
    $x = 6;
    $y = 3;

    echo "до:<br>";
    echo "x: $x<br>";
    echo "y: $y<br>";

    list($y, $x) = [$x, $y];

    echo "после:<br>";
    echo "x: $x<br>";
    echo "y: $y<br>";

    
    ?>
</body>

</html>