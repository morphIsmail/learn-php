<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 46</title>
</head>

<body>
    <?php
        $arr = [
            'name' => 'Petr',
            'phones' => [
                '888',
                '777'
            ]
        ];
        $encodeArr = json_encode($arr);
        echo $encodeArr;
        echo '<pre>';
        print_r(json_decode($encodeArr, true));
        echo '</pre>';
    ?>
</body>

</html>