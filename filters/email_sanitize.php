<?php
$correct = 'igorsimdyanov@gmail.com';
$wrong   = 'igorsimdyanov@//gmail.com';
echo filter_var($email_correct, FILTER_SANITIZE_EMAIL) . '<br />';
echo filter_var($email_wrong, FILTER_SANITIZE_EMAIL) . '<br />';
