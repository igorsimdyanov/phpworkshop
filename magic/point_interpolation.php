<?php
class Point
{
    private $point;

    public function __construct($x = 0, $y = 0)
    {
        $this->point = [];
        $this->point['x'] = $x;
        $this->point['y'] = $y;
    }
    public function __get($key)
    {
        if(array_key_exists($key, $this->point)) {
            return $this->point[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value)
    {
        if(array_key_exists($key, $this->point)) {
            $this->point[$key] = $value;
        }
    }

    public function __toString() {
        return "({$this->x}, {$this->y})";
    }
}
