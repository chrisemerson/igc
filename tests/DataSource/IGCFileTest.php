<?php
namespace CEmerson\IGC\DataSource;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamFile;

class IGCFileTest extends \PHPUnit_Framework_TestCase
{
    const TEST_CONTENT = "some test\ncontent\n\n";

    public function testIGCFile()
    {
        $directory = vfsStream::setup('test');
        $testIGCFIle = new vfsStreamFile("test.igc");

        $testIGCFIle
            ->withContent(self::TEST_CONTENT)
            ->at($directory);

        $IGCFile = new IGCFile($testIGCFIle->url());

        $this->assertEquals(self::TEST_CONTENT, $IGCFile->getIGCContents());
    }
}
