<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 35</title>
</head>

<body>
    <?php
    $arr = [5=>1, 2, 3];
    unset($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    
    ?>
</body>

</html>