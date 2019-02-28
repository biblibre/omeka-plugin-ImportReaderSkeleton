<?php

class ImportReaderSkeleton_Form_SkeletonReaderConfigForm extends Omeka_Form
{
    protected $config;

    public function init()
    {
        parent::init();
    }

    public function setReaderConfig($config)
    {
        $this->config = $config;
    }
}
