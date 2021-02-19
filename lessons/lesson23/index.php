<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 23</title>
</head>
<body>
    <?php
    $number = 90;
    switch(true) {
        case ($number > 0 && $number <= 10):
            echo "$number меньше 10 и больше 0";
            break;
        case ($number > 10 && $number <= 100):
            echo "$number меньше 100 и больше 10";
            break;
        case ($number > 100 && $number <= 1000):
            echo "$number меньше 1000 и больше 100";
            break;
        default:
            echo "$number больше 1000 или меньше 0";
            break; 
    }
    ?>
</body>
</html>