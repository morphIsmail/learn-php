<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 50</title>
    <style>
        img {
            width: 150px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <img src="lesson50.png" alt="">
    Форма для загрузки файлов<br>
    <form action="script.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="filename">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>