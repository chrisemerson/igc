<?php
namespace CEmerson\IGC\DataSources;

use CEmerson\IGC\IGCDataSource;

class IGCString implements IGCDataSource
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function getIGCContents()
    {
        return $this->string;
    }
}
