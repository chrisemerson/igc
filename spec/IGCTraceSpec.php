<?php
namespace spec\CEmerson\IGC;

use CEmerson\IGC\IGCDataSource;
use CEmerson\IGC\IGCTrace;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DateTime;

class IGCTraceSpec extends ObjectBehavior
{
    function let(IGCDataSource $dataSource)
    {
        $dataSource->getIGCContents()->willReturn("AXXXABC
HFDTE150612");

        $this->beConstructedWith($dataSource);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(IGCTrace::class);
    }

    function it_returns_the_date_from_the_trace(IGCDataSource $dataSource)
    {
        $this->getFlightDate()->shouldHaveType(DateTime::class);
        $this->getFlightDate()->format('Y-m-d')->shouldReturn("2012-06-15");
    }
}
