<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 28</title>
</head>
<body>
    <?php
        $var = 'Hello World!';
        $arr = (array) $var; 

        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    ?>
</body>
</html>