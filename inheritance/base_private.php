<?php
class Base
{
    private $var;

    public function __construct($var)
    {
        $this->var = $var;
    }
    public function getVar()
    {
        return $this->var;
    }
}
