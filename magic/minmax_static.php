<?php
class MinMax
{
    public static function __callStatic($method, $arg)
    {
        if (!is_array($arg)) {
            return false;
        }
        $value = $arg[0];
        if ($method == 'min') {
            for($i = 0; $i < count($arg); $i++)
            {
                if ($arg[$i] < $value) {
                    $value = $arg[$i];
                }
            }
        }
        if ($method == 'max') {
            for($i = 0; $i < count($arg); $i++) {
                if ($arg[$i] > $value) {
                    $value = $arg[$i];
                }
            }
        }
        return $value;
    }
}
