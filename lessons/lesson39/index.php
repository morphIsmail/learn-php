<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 39</title>
</head>

<body>
    <?php
        function formatSize($bytes) {
            $kbytes = $bytes / 1024;
            $mbytes = $kbytes / 1024;
            $gbytes = $mbytes / 1024;
            return [$bytes, $kbytes, $mbytes, $gbytes];
        }

        
        $arr = formatSize(54989777);
        $bytes = $arr[0];
        $kbytes = $arr[1];
        $mbytes = $arr[2];
        $gbytes = $arr[3];
        echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes";

    ?>
</body>

</html>