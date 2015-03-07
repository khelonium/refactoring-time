<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 3/7/15
 * Time: 8:00 PM
 */

namespace Refactoring\Time\Interval;


class SpecificWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itCanConstruct()
    {
        new SpecificWeek(new \DateTime());
    }

    /**
     * @test
     */
    function testIn2015()
    {
        $date = new \DateTime('2015-03-07');
        $week = new SpecificWeek($date);

        $this->assertEquals('2015-03-08', $week->getEnd()->format('Y-m-d'));
        $this->assertEquals('2015-03-02', $week->getStart()->format('Y-m-d'));

    }

    /**
     * @test
     */
    function testLastWeekOf2014()
    {
        $week = new SpecificWeek(new \DateTime('2014-12-31'));

        $this->assertEquals('2014-12-29', $week->getStart()->format('Y-m-d'));
        $this->assertEquals('2015-01-04', $week->getEnd()->format('Y-m-d'));
    }

}
