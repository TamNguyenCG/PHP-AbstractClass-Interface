<?php

include "CircleComparator.php";

$circleOne = new CircleRebuild("circleOne", 6);
$circleTwo = new CircleRebuild("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));