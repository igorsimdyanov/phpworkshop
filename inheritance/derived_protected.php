<?php
require_once 'base_protected.php';

class Derived extends Base
{
    public function __construct($var)
    {
        $this->var = $var;
    }
}
