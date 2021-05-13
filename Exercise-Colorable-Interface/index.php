<?php
include_once "vendor/autoload.php";

$array=[];
array_push($array,$circle = new \Colorable\Circle("Circle",10));
array_push($array,$Rectangle = new \Colorable\Rectangle("Rectangle",15,10));
array_push($array,$circle2 = new \Colorable\Circle("Circle2",15));
array_push($array,$square = new \Colorable\Square("Square",20));
array_push($array,$Rectangle2 = new \Colorable\Rectangle("Rectangle2",25,20));


echo "<pre>";
print_r($array);
echo "</pre>";

foreach ($array as $index => $item) {
    if($square instanceof $item){
        echo $square->howToColor();
    }
}
