<?php
namespace spec\CEmerson\IGC;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LatLongSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(\CEmerson\IGC\LatLong::class);
    }
}
