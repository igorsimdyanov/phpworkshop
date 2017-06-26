<?php
class PasswordException extends Exception {
    public function __construct(
        $message = 'Не допускается прямого обращения к атрибуту password'
    )
    {
        parent::__construct($message, 1002);
    }
}
