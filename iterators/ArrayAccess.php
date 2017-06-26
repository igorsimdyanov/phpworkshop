<?php
interface ArrayAccess {
    abstract public boolean offsetExists(mixed $index);
    abstract public mixed offsetGet(mixed $index);
    abstract public void offsetSet(mixed $index, mixed $value);
    abstract public void offsetUnset(mixed $index);
}
