<?php
namespace Geometry;
use JetBrains\PhpStorm\Pure;
use Resizeable\Resizeable;
use Shape\Shape;

class Rectangle extends Shape implements Resizeable
{
    public int|float $width;
    public int|float $height;
    public int|float $percent;
    const PERCENTAGE = 100;

 #[Pure] public function __construct(string $name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
        $this->percent = 100;
    }

    /**
     * @param float|int $percent
     */
    public function setPercent(float|int $percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return float|int
     */
    public function getPercent(): float|int
    {
        return $this->percent;
    }

    public function resize(): float|int
    {
        return $this->width += $this->width * $this->percent/self::PERCENTAGE;
    }

    public function resizeHeight(): float|int
    {
       return $this->height += $this->height * $this->percent/self::PERCENTAGE;
    }

}