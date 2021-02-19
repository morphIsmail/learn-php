<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 9</title>
</head>
<body>
    <?php 
        $num = 24;
        $f = (float)($num/2) - (int)($num/2);
        if($f){
            echo 'Число нечетное';
        } else {
            echo 'Число четное';
        }
    ?>
</body>
</html>