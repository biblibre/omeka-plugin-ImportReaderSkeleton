<?php

class ImportReaderSkeleton_Form_SkeletonReaderParamsForm extends Omeka_Form
{
    protected $reader;

    public function init()
    {
        parent::init();
    }

    public function setReader(Import_Reader $reader)
    {
        $this->reader = $reader;
    }
}
