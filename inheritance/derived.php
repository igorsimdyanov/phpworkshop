<?php
require_once 'base.php';

class Derived extends Base
{
    public $second;
    public function printSecond()
    {
        echo $this->second;
    }
}
