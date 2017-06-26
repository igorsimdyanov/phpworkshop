<?php
namespace Factory\Models;

class Users extends Collection
{
    public $users;

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
        parent::__construct($users);
    }

    public function render()
    {
        return implode('<br />', parent::render());
    }
}
