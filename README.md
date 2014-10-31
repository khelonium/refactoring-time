refactoring-time
================

Time Component of the refactoring.ro library.  Provides conenient methods to work with  Dates, especially with intervals. 



Example
=======

$lastMonth = new LastMonth();


echo "First of last month was ",$lastMonth->getStart()->format("Y-m-d"),"\n";

$today = new \DateTime();

if (!($lastMonth->contains($today))) {
    echo "Today is not contained in last month \n";
}

$thisMonth = new ThisMonth();

if ($thisMonth->contains($today)) {
    echo "This month contains today\n";
}
$thisYear = new ThisYear();

if ($thisYear->overlaps($lastMonth)) {
    echo "This year overlaps with last month \n";
}

