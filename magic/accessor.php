<?php
class Accessor
{
    private $arr = [];

    public function __get($key)
    {
        if(array_key_exists($key, $this->arr)) {
            return $this->arr[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value)
    {
        $this->arr[$key] = $value;
    }
}
