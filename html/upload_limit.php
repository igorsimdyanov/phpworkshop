<?php
if ($_FILES['filename']['size'] > 3*1024*1024) {
    exit('Размер файла превышает три мегабайта');
}
if (move_uploaded_file($_FILES['filename']['tmp_name'],
     'temp/'.$_FILES['filename']['name']))
{
    echo 'Файл успешно загружен <br />';
} else {
    echo 'Ошибка загрузки файла <br />';
}
