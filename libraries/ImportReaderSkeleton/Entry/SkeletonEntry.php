<?php

class ImportReaderSkeleton_Entry_SkeletonEntry implements Import_Entry
{
    public function __construct()
    {
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet($offset)
    {
    }

    public function offsetSet($offset, $value)
    {
        throw new Exception("Modification forbidden");
    }

    public function offsetUnset($offset)
    {
        throw new Exception("Modification forbidden");
    }

    public function current()
    {
    }

    public function key()
    {
    }

    public function next()
    {
    }

    public function rewind()
    {
    }

    public function valid()
    {
    }
}
