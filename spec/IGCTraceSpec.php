<?php
namespace spec\CEmerson\IGC;

use CEmerson\IGC\IGCDataSource;
use CEmerson\IGC\IGCTrace;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IGCTraceSpec extends ObjectBehavior
{
    function it_is_initializable(IGCDataSource $dataSource)
    {
        $this->beConstructedWith($dataSource);

        $this->shouldHaveType(IGCTrace::class);
    }
}
