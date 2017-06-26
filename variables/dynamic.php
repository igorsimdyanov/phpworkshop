<?php
$id_menu = 3;
$str = "active$id_menu"; // "active3"
$$str = 1; // $active3 = 1;
if(isset($active3)) {
    echo "Переменная \${$str} существует и равна $active3";
}