<?php
namespace CEmerson\IGC;

use CEmerson\IGC\Exceptions\InvalidIGCFileException;
use DateTime;

class IGCTrace
{
    /** @var string[] */
    private $igcLines;

    public function __construct(IGCDataSource $dataSource)
    {
        $this->igcLines = array_map('trim', explode("\n", $dataSource->getIGCContents()));
    }

    public function getFlightInfo()
    {
        $headerLines = [];

        foreach ($this->igcLines as $igcLine) {
            if (strcmp(substr($igcLine, 0, 1), 'H') == 0) {
                $headerLines[] = $igcLine;
            }
        }

        return new FlightInfo($headerLines);
    }

    public function getFlightDate()
    {
        return $this->getFlightInfo()->getFlightDate();
    }
}
