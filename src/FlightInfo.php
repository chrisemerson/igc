<?php
namespace CEmerson\IGC;

use DateTime;

class FlightInfo
{
    private $headerLines = [];

    public function __construct(array $headerLines)
    {
        foreach ($headerLines as $headerLine) {
            $this->headerLines[substr($headerLine, 0, 5)] = $headerLine;
        }
    }

    public function getFlightDate()
    {
        $igcLine = $this->headerLines["HFDTE"];

        $flightDate = new DateTime();
        $flightDate->setTimestamp(mktime(12, 0, 0, substr($igcLine, 7, 2), substr($igcLine, 5, 2), substr($igcLine, 9, 2)));

        return $flightDate;
    }
}
