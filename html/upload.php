<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Результат загрузки файла</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
if (move_uploaded_file($_FILES['filename']['tmp_name'],
                       'temp/'.$_FILES['filename']['name'])) {
    echo 'Файл успешно загружен';
} else {
   echo 'Ошибка загрузки файла';
}
?>
</body>
</html>