<?php

namespace Resize;

class Circle extends Shape implements Resizeable
{
    public int|float $radius;

    public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }

    #[Pure] public function resize($percentage): float|int
    {
        return $this->calculateArea() * $percentage;
    }
}
