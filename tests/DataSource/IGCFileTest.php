<?php
namespace CEmerson\IGC\DataSource;

use PHPUnit_Framework_TestCase;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamFile;
use InvalidArgumentException;

class IGCFileTest extends PHPUnit_Framework_TestCase
{
    /** @var vfsStreamDirectory */
    private $directory;

    const TEST_CONTENT = "some test\ncontent\n\n";

    public function setUp()
    {
        $this->directory = vfsStream::setup('test');
    }

    public function tearDown()
    {
        $this->directory = null;
    }

    public function testFileContentsAreReturned()
    {
        $testIGCFile = new vfsStreamFile("test.igc");

        $testIGCFile
            ->withContent(self::TEST_CONTENT)
            ->at($this->directory);

        $IGCFile = new IGCFile($testIGCFile->url());

        $this->assertEquals(self::TEST_CONTENT, $IGCFile->getIGCContents());
    }

    public function testThrowsExceptionWhenFileDoesntExist()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        new IGCFile($this->directory->url() . "/doesntexist.igc");
    }
}
