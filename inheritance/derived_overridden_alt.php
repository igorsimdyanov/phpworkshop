<?php
require_once 'base_overridden.php';

class Derived extends Base
{
    public function overridden()
    {
        parent::overridden();
        echo 'Вызов метода Derived::overridden()<br />';
    }
}
