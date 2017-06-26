<?php
namespace SelfPhp;

const VERSION = '1.0';

function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}

class User
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
}
