<?php
namespace SelfPhp\constants;

const VERSION = '3.0';

namespace SelfPhp\functions;

function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}

namespace SelfPhp\classes;

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
