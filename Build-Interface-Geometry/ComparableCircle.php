<?php
include "Circle/Circle.php";
include "Comparable/Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function compareTo($objTwo): int
    {
        $circleTwoRadius = $objTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius){
            return 1;
        }elseif ($this->getRadius() < $circleTwoRadius){
            return -1;
        }else{
            return 0;
        }
    }
}

