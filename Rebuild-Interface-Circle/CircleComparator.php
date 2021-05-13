<?php
include "Circle/CircleRebuild.php";
include "Comparator/Comparator.php";

class CircleComparator implements Comparator
{
    public function compare(object $objOne, object $objTwo): int
    {
        $radiusOne = $objOne->getRadius();
        $radiusTwo = $objTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}