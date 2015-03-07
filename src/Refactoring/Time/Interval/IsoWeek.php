<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 3/7/15
 * Time: 8:18 PM
 */
namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class IsoWeek extends Interval
{

    public function __construct($year, $week)
    {
        $start = new \DateTime();

        $start->setISODate($year, $week);

        parent::__construct(clone $start, $start->setISODate($year, $week, 7));


    }
}