<?php
namespace CEmerson\IGC\DataSources;

use CEmerson\IGC\IGCDataSource;
use InvalidArgumentException;

class IGCFile implements IGCDataSource
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getIGCContents()
    {
        if (!file_exists($this->filename)) {
            throw new InvalidArgumentException("IGC file not found: " . $this->filename);
        }

        return file_get_contents($this->filename);
    }
}
