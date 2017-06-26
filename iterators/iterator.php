<?php
interface Iterator extends Traversable
{
    abstract public mixed current();
    abstract public mixed key();
    abstract public next();
    abstract public rewind();
    abstract public boolean valid();
}
