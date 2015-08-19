<?php
namespace CEmerson\IGC\DataSources;

use CEmerson\IGC\IGCDataSource;
use InvalidArgumentException;

class IGCFile implements IGCDataSource
{
    private $filename;

    public function __construct($filename)
    {
        if (!file_exists($filename)) {
            throw new InvalidArgumentException("IGC file not found: " . $filename);
        }

        $this->filename = $filename;
    }

    public function getIGCContents()
    {
        return file_get_contents($this->filename);
    }
}
