<?php
namespace CEmerson\IGC;

use PHPUnit_Framework_TestCase;
use CEmerson\IGC\DataSource\IGCDataSource;

class IGCTraceTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInstantiated()
    {
        $mockDataSource = $this->getMock(IGCDataSource::class);

        $IGCTrace = new IGCTrace($mockDataSource);
        $this->assertInstanceOf(IGCTrace::class, $IGCTrace);
    }
}
