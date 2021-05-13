<?php
namespace Shape;

class Shape
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}