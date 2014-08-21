<?php
namespace CEmerson\IGC\DataSource;

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
