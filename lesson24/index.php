<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 24</title>
</head>
<body>
    <?php
    $homepage = file_get_contents('text.txt');
    $homepage .= "\n\tЕще одна строка";
    $filename = date("Y-m-d-H-i-s") . '.txt';
    file_put_contents($filename, $homepage);
    ?>
</body>
</html>