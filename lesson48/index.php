<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 48</title>
</head>

<body>
    <form method="GET" action="">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        if(!empty($_GET['first']) && !empty($_GET['second'])) {
            echo '</pre>';
            print_r($_GET);
            echo '</pre>';
        } else {
            exit('Текстовые поля не заполнены');
        }
        
    ?>
</body>

</html>