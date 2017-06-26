<?php
class Constructor
{
    private $var;

    public function __construct()
    {
        echo 'Вызов конструктора<br />';
        $this->var = 100;
    }
}
