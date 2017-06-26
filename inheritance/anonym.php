<?php
require_once 'dumper.php';

Dumper::print( new class {
    public $title;
    public function __construct(){
        $this->title = 'Hello world!';
    }
});
