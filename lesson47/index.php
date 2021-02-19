<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 47</title>
</head>

<body>
    <?php
        $url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
        echo '<pre>';
        echo parse_url($url, PHP_URL_PASS);
        echo '</pre>';
    ?>
</body>

</html>