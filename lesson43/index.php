<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 43</title>
</head>

<body>
    <?php
        // $str = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирынй текст[/b]';
        // echo $str;
        // echo '<br>';
        // $str = str_replace(['[b]', '[/b]'], ['', ''], $str, $number);

        // echo "Осуществлено замен: " . $number;
    
        $str = '  Hello, world! ';
        echo strlen($str);
        echo '<br>';
        echo trim($str, " H!");
    ?>
</body>

</html>