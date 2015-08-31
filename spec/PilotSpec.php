<?php
namespace spec\CEmerson\IGC;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PilotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(\CEmerson\IGC\Pilot::class);
    }
}
