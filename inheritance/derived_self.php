<?php
require_once 'base_self.php';

class Derived extends Base
{
    public static function title()
    {
        return __CLASS__;
    }
}
