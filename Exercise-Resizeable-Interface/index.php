<?php

include_once 'vendor/autoload.php';
use Resize\Circle;

$arr = [];
array_push($arr,$circle = new Circle("Circle",5));
array_push($arr,$rectangle = new \Resize\Rectangle("Rectangle",10,15));
array_push($arr,$square = new \Resize\Square("Square",8));
$percentage = rand(1,100);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resizeable Geometry</title>
    <style>
        h1{
            color: red;
        }
        table{
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
            width: 500px
        }
    </style>
</head>
<body>
    <h1>Resizeable Geometry with Area</h1>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Before</th>
            <th>After</th>
        </tr>
        <?php foreach ($arr as $index => $item): ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $item->getName() ?></td>
            <td><?php echo $item->calculateArea() ?></td>
            <td><?php echo $item->resize($percentage)?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>

