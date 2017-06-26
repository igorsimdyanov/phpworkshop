<?php
namespace Factory\Models;

class Collection extends \Factory\Router
{
    public $collection;

    public function __construct($collection = null)
    {
        $this->collection = $collection;
    }

    public function render()
    {
        return array_map(
                   function($item){
                       return $item->render();
                   },
                   $this->collection);
    }
}
