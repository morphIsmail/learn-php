<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 38</title>
</head>

<body>
    <?php
        function outArguments($a,$b,$c,$d) {
            echo "$a<br>";
            echo "$b<br>";
            echo "$c<br>";
            echo "$d<br>";
        }

        $items = ['PHP', 'JS', 'C++', 'Python'];
        outArguments(...$items);

    ?>
</body>

</html>