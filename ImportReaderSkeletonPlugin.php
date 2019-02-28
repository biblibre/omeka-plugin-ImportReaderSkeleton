<?php

class ImportReaderSkeletonPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'initialize',
    );

    public function hookInitialize()
    {
        $events = Zend_EventManager_StaticEventManager::getInstance();
        $events->attach(ImportPlugin::class, 'readers', array($this, 'getReaders'));
    }

    public function getReaders()
    {
        $readers = array(
            'skeleton' => 'ImportReaderSkeleton_Reader_SkeletonReader',
        );

        return $readers;
    }
}
