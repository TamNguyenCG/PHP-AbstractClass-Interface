<?php
namespace Geometry;

use JetBrains\PhpStorm\Pure;
use Resizeable\Resizeable;

class Square extends Rectangle implements Resizeable
{
    public int|float $percent;
    const PERCENTAGE = 100;

    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
        $this->percent = 100;
    }

    /**
     * @param float|int $percent
     */
    public function setSquarePercent(float|int $percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return float|int
     */
    public function getSquarePercent(): float|int
    {
        return $this->percent;
    }

    public function resize(): float|int
    {
        return $this->width += $this->width * $this->percent/self::PERCENTAGE;
    }
}