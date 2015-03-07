<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 3/7/15
 * Time: 7:44 PM
 */

namespace Refactoring\Time\Interval;


use Refactoring\Time\Interval;

class SpecificYearTest extends \PHPUnit_Framework_TestCase {
    /**
    * @test
    */
    function itCanConstruct()
    {
       new SpecificYear(new \DateTime());
    }

    /**
     * @test
     */
    function itSetsStartAndEndForLastYear()
    {

        $day = new \DateTime();
        $day->sub(new \DateInterval('P1Y'));

        $specific = new SpecificYear($day);

        $this->assertEquals($day->format('Y-01-01') , $specific->getStart()->format('Y-m-d'));
        $this->assertEquals($day->format('Y-12-31') , $specific->getEnd()->format('Y-m-d'));

    }

    /**
     * @test
     */
    function itSetsIntervalDatesFor1900()
    {

        $day = new \DateTime('1900-07-01');

        $specific = new SpecificYear($day);

        $this->assertEquals( '1900-01-01' , $specific->getStart()->format('Y-m-d'));
        $this->assertEquals('1900-12-31', $day->format('Y-12-31') , $specific->getEnd()->format('Y-m-d'));

    }
}

