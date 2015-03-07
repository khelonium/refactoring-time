<?php
namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class SpecificYear extends Interval
{

    public function __construct(\DateTime $day)
    {
        parent::__construct(
            new \DateTime($day->format('Y-01-01')),
            new \DateTime($day->format('Y-12-31 23:59:59'))
        );
    }
}