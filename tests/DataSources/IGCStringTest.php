<?php
namespace CEmerson\IGC\DataSources;

use PHPUnit_Framework_TestCase;

class IGCStringTest extends PHPUnit_Framework_TestCase
{
    const TEST_CONTENT = "\nsome more test\ncontent. !\"£\$%^&*()\naoenstudaohesuhasas10237939045712biaostn '089, 09a',eg 0[u9f '0[.,duh'904d ";

    public function testIGCString()
    {
        $IGCString = new IGCString(self::TEST_CONTENT);
        $this->assertEquals(self::TEST_CONTENT, $IGCString->getIGCContents());
    }
}
