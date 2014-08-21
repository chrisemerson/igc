<?php
namespace CEmerson\IGC;

class IGCTraceTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBeInstantiated()
    {
        $mockDataSource = $this->getMock('CEmerson\IGC\DataSource\IGCDataSource');

        $IGCTrace = new IGCTrace($mockDataSource);
        $this->assertInstanceOf('CEmerson\IGC\IGCTrace', $IGCTrace);
    }
}
