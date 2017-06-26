<?php
namespace MVC\Decorators;

class UserDecorator extends DecoratorFactory
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function title()
    {
       return implode(' ', [$this->user->first_name, $this->user->last_name]);
    }

    public function body()
    {
        return '<strong>' . htmlspecialchars($this->title()) . '</strong> ' .
               '(' . htmlspecialchars($this->user->email) . ')';

    }

    public function items()
    {
        return '<item>'.
               '<title>' . htmlspecialchars($this->title()) . '</title>' .
               '<email>' . htmlspecialchars($this->user->email) . '</email>' .
               '</item>';
    }
}
