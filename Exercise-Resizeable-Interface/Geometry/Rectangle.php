<?php

namespace Resize;


class Rectangle extends Shape implements Resizeable
{
    public int $width;
    public int $height;

    #[Pure] public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }

    #[Pure] public function resize($percentage): float|int
    {
        return $this->calculateArea() * $percentage;
    }
}