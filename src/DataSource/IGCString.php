<?php
namespace CEmerson\IGC;

use CEmerson\IGC\DataSource\IGCDataSource;

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
