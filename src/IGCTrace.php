<?php
namespace CEmerson\IGC;

class IGCTrace
{
    /** @var IGCDataSource */
    private $dataSource;

    public function __construct(IGCDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }
}
