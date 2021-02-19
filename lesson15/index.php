<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 15</title>
</head>
<body>
    <?php
        class ConstClass {
            const NAME = "str";
        }
        if(defined('ConstClass::NAME')) {
            echo "Константа определна";
        } else {
            echo "Константа не определна";
        }
    ?>
</body>
</html>