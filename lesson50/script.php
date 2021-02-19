<?php
  if($_FILES['filename']['size'] > 3*1024*1024) {
    exit('Размер файла превышает 3 мегабайта');
  }

  if(move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/'.$_FILES['filename']['name'])) {
    echo 'Файл успешно загружен';
    echo 'Исходное имя файла - ' . $_FILES['filename']['name'] . '<br>';
    echo 'Размер файла в байтах - ' . $_FILES['filename']['size'] . '<br>';
    echo 'MIME тип файла - ' . $_FILES['filename']['type'] . '<br>';
    echo 'Временный файл, в котором сохранен загруженный файл - ' . $_FILES['filename']['tmp_name'] . '<br>';
  } else {
    echo 'Ошибка загрузки файла';
  }
?>