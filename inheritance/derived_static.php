<?php
require_once 'base_static.php';

class Derived extends Base
{
    public static function title()
    {
        return __CLASS__;
    }
}
