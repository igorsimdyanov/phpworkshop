<?php
class Base
{
    public static function title()
    {
        return __CLASS__;
    }

    public static function test() {
        return static::title();
    }
}
