<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 19</title>
</head>
<body>
    <?php
        echo 1 > 0;         // true
        echo 1 > 1;         // false
        echo 1 >= 1;        // true
        echo 1 < 0;         // false
        echo 1 < 1;         // false
        echo 1 <= 1;        // true
        echo 1 == 0;        // false
        echo 1 == 1;        // true
        echo 1 != 0;        // true
        echo 1 != 1;        // false
        echo 0 == '8qes';   // false
        echo 0 == '';       // true
        echo 0 == 'Hello';  // true
        echo 0 == null;     // true
    ?>
</body>
</html>