<?php
abstract class Pager
{
    abstract public function total();
    abstract public function pnumber();
    abstract public function pageLink();
    abstract public function parameters();
}
