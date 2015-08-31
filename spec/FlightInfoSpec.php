<?php
namespace spec\CEmerson\IGC;

use CEmerson\IGC\FlightInfo;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DateTime;

class FlightInfoSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            [
                "HFDTE150612",
                "HFFXA035",
                "HFPLTPILOTINCHARGE:Chris Emerson",
                "HFCM2CREW2:John Smith",
                "HFGTYGLIDERTYPE:Schempp-Hirth Duo Discus XLT",
                "HFGIDGLIDERID:G-CHRS",
                "HFDTM100GPSDATUM:WGS-1984",
                "HFRFWFIRMWAREVERSION:6.4",
                "HFRHWHARDWAREVERSION:3.2",
                "HFFTYFRTYPE:EW Avionics Micro-Recorder",
                "HFGPSMarconi,SuperX,12ch,10000m",
                "HFPRSPRESSALTSENSOR:Sensyn,A32,11000m",
                "HFCIDCOMPETITIONID:CE1",
                "HFCCLCOMPETITIONCLASS:Open Class Glider"
            ]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(FlightInfo::class);
    }

    function it_returns_the_date_from_the_trace()
    {
        $this->getFlightDate()->shouldHaveType(DateTime::class);
        $this->getFlightDate()->format('Y-m-d')->shouldReturn("2012-06-15");
    }
}
