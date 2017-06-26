<?php
namespace Factory\Models;

class User extends \Factory\Router
{
    public $first_name;
    public $last_name;
    public $email;
    private $password;

    public function __construct(
         $email,
         $password,
         $first_name = null,
         $last_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->email      = $email;
        $this->password   = $password;
    }

    public function render()
    {
        $name = implode(' ', [$this->first_name, $this->last_name]);
        return '<strong>' . htmlspecialchars($name) . '</strong> ' .
               '(' . htmlspecialchars($this->email) . ')';
    }
}
