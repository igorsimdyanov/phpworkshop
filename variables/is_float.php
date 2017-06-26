<?php
// Объявляем переменную типа "float"
$float = 123.24;
if(is_float($float)) { // true
    echo "Переменная $float имеет тип float<br />";
}
if(is_double($float)) { // true
    echo "Переменная $float имеет тип double<br />";
}

// Объявляем переменную типа "double"
$double = 123.24e307;
if(is_float($double)) { // true
    echo "Переменная $double имеет тип float<br />";
}
if(is_double($double)) { // true
    echo "Переменная $double имеет тип double<br />";
}