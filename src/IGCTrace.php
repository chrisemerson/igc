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

    public function getFlightDate()
    {
        foreach ($this->igcLines as $igcLine) {
            if (strcmp(substr($igcLine, 0, 5), "HFDTE") == 0) {
                $flightDate = new DateTime();
                $flightDate->setTimestamp(mktime(12, 0, 0, substr($igcLine, 7, 2), substr($igcLine, 5, 2), substr($igcLine, 9, 2)));

                return $flightDate;
            }
        }

        throw new InvalidIGCFileException("Required field HFDTE not present in IGC file");
    }
}
