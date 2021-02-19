<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 45</title>
</head>

<body>
    <?php
        // $number = 5867;
        // printf('Двоичное число : %b<br />', $number);
        // printf('Десятичное число: %d<br />', $number);
        // printf('Число с плавающей точкой: %f <br / >', $number);
        // printf('Восьмеричное число: %o<br />', $number);
        // printf('Строковое представление: %s <br / >', $number);
        // printf('Шестнадцатеричное число (нижний регистр): %x<br / >', $number);
        // printf('Шестнадцатеричное число (верхний регистр): %X<br / >', $number); 

        // $red = 255;
        // $green = 255;
        // $blue = 100;
        // printf('#%X%X%X', $red, $green, $blue);

        // echo '<pre>';
        // printf('%4.2f', 44.54678);
        // echo '<br>';
        // printf('%.4f', 45.99774);
        // echo '</pre>';

        // $str = 'Имя:Фамилия:e-mail:Номер';
        // echo '<pre>';
        // print_r(explode(':', $str));
        // echo '</pre>';

        $arr = ['Имя', 'Фамилия', 'e-mail', 'Номер'];
        echo implode(', ', $arr);
    ?>
</body>

</html>