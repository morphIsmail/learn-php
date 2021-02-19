<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<body>
    <?php 
        echo "Теущая дата и время";
        echo date(DATE_RSS);
    ?>
    <br>
    <?php 
        echo 9 + 3 - 4;
        echo "Text";
    ?>
    <br>

    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue">Синий текст</div>
        <?php
    } else {
        ?>
        <div style="color: red">Красный текст</div>
        <?php
    }
    ?>

</body>
</html>