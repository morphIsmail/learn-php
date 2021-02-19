<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 20</title>
</head>
<body>
    <?php
        $char = 'c++';
        if ($char == 'php') {
    ?>
        <h1>Язык PHP</h1>
    <?php
        } elseif ($char == 'js') {
    ?>
        <h1>Язык JavaScript</h1>
    <?php
        } elseif ($char == 'c#') {
    ?>
        <h1>Язык C#</h1>
    <?php
        } else {
    ?>
        <h1>Неизвестный человечеству язык</h1>
    <?php
        }
    ?>
</body>
</html>