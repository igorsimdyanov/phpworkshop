<?php
$flag1 = true; // Истина
$flag2 = true; // Истина
if ($flag1) {
    if ($flag2) {
        echo '<p>Оба флага истины</p>';
    } else {
        echo '<p>Условие: false (Один из флагов ложен)</p>';
    }
} else {
    echo '<p>Условие: false (Один из флагов ложен)</p>';
}
