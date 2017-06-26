<?php
$flag1 = true;  // Истина
$flag2 = false; // Ложь
if ($flag1 || $flag2) { // true
    echo '<p>Условие: true (Один из флагов истинен)</p>';
} else {
    echo '<p>Условие: false (Оба флага ложны)</p>';
}
