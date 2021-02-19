<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 34</title>
</head>

<body>
    <?php
    $first = [1=>1, 'blue'];
    $second = ['1'=>'1', 'blue'];

    if($first === $second) {
        echo 'Массивы равны<br>';
    } else {
        echo 'Массивы не равны<br>';
    }

    ?>
</body>

</html>