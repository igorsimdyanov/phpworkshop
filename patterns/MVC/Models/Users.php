<?php
namespace MVC\Models;

class Users
{
    public $collection;

    public function __construct($users = null)
    {
        if(is_null($users))
        {
            $users = [
                new User(
                     'makkuz@yandex.ru',
                     'password',
                     'Максим',
                     'Кузнецов'),
                new User(
                     'igorsimdyanov@gmail.com',
                     'password',
                     'Игорь',
                     'Симдянов')
            ];
        }
        $this->collection = $users;
    }
}
