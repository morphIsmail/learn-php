<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 44</title>
</head>

<body>
    <form action="handler.php" method="post">
        Сообщение: <br>
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>
    <?php
        $str = '<p>Обычный текст</p><br>
                <br>Жирный текст</br>';
        echo htmlspecialchars(strip_tags($str, '<p>'));
    ?>
</body>

</html>