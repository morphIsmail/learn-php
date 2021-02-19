<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 41</title>
</head>

<body>
    <?php
    // $message = "Текстовое сообщение";
    // $mFu = function() use ($message) {
    //     $message = "New";
    //     return $message;
    // };
    // echo $mFu();
    // echo '<br>';
    // echo $message;

    // function odd(int $number) {
    //     if($number % 2 == 0) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
    // echo odd(4);

    function sum(...$items) {
        $sum = 0;
        for($i=0; $i<count($items); $i++) {
            $sum += $items[$i];
        }
        return $sum;
    }
    echo sum(10,5,2,3,1,5);
    ?>
</body>

</html>