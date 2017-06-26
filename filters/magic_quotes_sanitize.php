<?php
$arr = [
    'Deb\'s files',
    'Symbol \\',
    'print "Hello world!"'
];
echo '<pre>';
print_r($arr);
$result = filter_var_array($arr, FILTER_SANITIZE_MAGIC_QUOTES);
print_r($result);
