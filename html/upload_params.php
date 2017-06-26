<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Результат загрузки файла</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
if (move_uploaded_file($_FILES['filename']['tmp_name'],
                       'temp/'.$_FILES['filename']['name']))
{
    echo 'Файл успешно загружен <br />';
    // далее выводится информация о файле
    echo 'Характеристики файла: <br />';
    echo 'Имя файла: ';
    echo $_FILES['filename']['name'];
    echo '<br />Размер файла: ';
    echo $_FILES['filename']['size'];
    echo '<br />Каталог для загрузки: ';
    echo $_FILES['filename']['tmp_name'];
    echo '<br />Тип файла: ';
    echo $_FILES['filename']['type'];
} else {
    echo 'Ошибка загрузки файла';
}
?>
</body>
</html>
