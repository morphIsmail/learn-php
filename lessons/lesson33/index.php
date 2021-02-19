<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 33</title>
</head>

<body>
    <?php
    $transport = [
        'Авто' => ['Лада', 'Chevrolet', 'Dodge', 'Cadilac'],
        'Самолеты' => ['Ил-2', 'И-16'],
        'Корабли' => ['Авианосец', 'Фрегат', 'Эсминец']
    ];
    foreach($transport as $key => $array) {
        echo "<b>$key</b><br>";
        for($i=0; $i<count($array); $i++) {
            echo "<li>$array[$i]</li>";
        }
    }
    ?>
</body>

</html>