<?php
namespace CEmerson\IGC;

use CEmerson\IGC\DataSource\IGCDataSource;

class IGCTrace
{
    /** @var IGCDataSource */
    private $dataSource;

    public function __construct(IGCDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }
}
