<?php
$name = "Имя пользователя";
$text = <<< 'MARKER'
Переменные PHP не будут интерполироваться: $name
MARKER;
echo $text . '<br />';
echo $name . '<br />';
