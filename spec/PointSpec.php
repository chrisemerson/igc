<?php
namespace spec\CEmerson\IGC;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PointSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(\CEmerson\IGC\Point::class);
    }
}
