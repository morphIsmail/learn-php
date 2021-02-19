<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 22</title>
</head>
<body>
    <?php
        // $x = 250;
        // $x = $x < 0 ? -$x : $x;
        // echo $x;    
        $n = 0;
        finish:
        $y = 5;
        $y = $y ?? 1;
        echo $y;
        $n++;
        if($n>6) {
            goto end;
        }

        goto finish;
        end:
        
    ?>
</body>
</html>