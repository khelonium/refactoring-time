<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 3/7/15
 * Time: 8:12 PM
 */

namespace Refactoring\Time\Interval;


use Refactoring\Time\Interval;

class IsoWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function worksWithFirstOfTheYear()
    {
        $week = new IsoWeek(2015, 1);

        $this->assertEquals('2014-12-29', $week->getStart()->format('Y-m-d'));
        $this->assertEquals('2015-01-04', $week->getEnd()->format('Y-m-d'));

    }
}
