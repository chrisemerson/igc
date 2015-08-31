<?php
namespace spec\CEmerson\IGC\DataSources;

use CEmerson\IGC\DataSources\IGCString;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IGCStringSpec extends ObjectBehavior
{
    const TEST_CONTENT = "\nsome more test\ncontent. !\"£\$%^&*()\naoenstudaohesuhasas10237939045712biaostn '089, 09a',eg 0[u9f '0[.,duh'904d ";

    function it_is_initializable()
    {
        $this->beConstructedWith(self::TEST_CONTENT);
        $this->shouldHaveType(IGCString::class);
    }

    function it_returns_the_igc_content_passed_to_it()
    {
        $this->beConstructedWith(self::TEST_CONTENT);
        $this->getIGCContents()->shouldReturn(self::TEST_CONTENT);
    }
}
