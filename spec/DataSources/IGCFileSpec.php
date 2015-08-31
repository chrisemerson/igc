<?php
namespace spec\CEmerson\IGC\DataSources;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamFile;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use InvalidArgumentException;

class IGCFileSpec extends ObjectBehavior
{
    /** @var vfsStreamDirectory */
    private $directory;

    const TEST_CONTENT = "some test\ncontent\n\n";

    function let()
    {
        $this->directory = vfsStream::setup('test');
    }

    function letGo()
    {
        $this->directory = null;
    }

    function it_returns_the_contents_of_a_file()
    {
        $testIGCFile = new vfsStreamFile("test.igc");

        $testIGCFile
            ->withContent(self::TEST_CONTENT)
            ->at($this->directory);

        $this->beConstructedWith($testIGCFile->url());
        $this->getIGCContents()->shouldReturn(self::TEST_CONTENT);
    }

    function it_throws_an_exception_when_the_file_isnt_found()
    {
        $this->beConstructedWith($this->directory->url() . "/doesntexist.igc");
        $this->shouldThrow(InvalidArgumentException::class)->duringGetIGCContents();
    }
}
