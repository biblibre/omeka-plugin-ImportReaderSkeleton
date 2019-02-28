<?php

class ImportReaderSkeleton_Reader_SkeletonReader
    implements Import_Reader, Import_Configurable, Import_Parametrizable
{
    use Import_ConfigurableTrait, Import_ParametrizableTrait;

    public function getLabel()
    {
        return 'Skeleton';
    }

    public function getAvailableFields()
    {
        $fields = array();

        return $fields;
    }

    public function current()
    {
        return new ImportReaderSkeleton_Entry_SkeletonEntry();
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

    public function getConfigForm()
    {
        return new ImportReaderSkeleton_Form_SkeletonReaderConfigForm(array(
            'readerConfig' => $this->getConfig(),
        ));
    }

    public function handleConfigForm(Zend_Form $form)
    {
        $values = $form->getValues();

        $this->setConfig($values);
    }

    public function getParamsForm()
    {
        return new ImportReaderSkeleton_Form_SkeletonReaderParamsForm(array(
            'reader' => $this,
        ));
    }

    public function handleParamsForm(Zend_Form $form)
    {
        $values = $form->getValues();

        $this->setParams($values);
    }
}
