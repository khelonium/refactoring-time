<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 3/7/15
 * Time: 8:00 PM
 */

namespace Refactoring\Time\Interval;


use Refactoring\Time\Interval;

class SpecificWeek  extends  Interval
{

    public function __construct(\DateTime $day)
    {
        $end = clone $day;
        parent::__construct($day->modify('this week'), $end->modify('this week +6 days'));
    }
}