<?php
namespace Geometry;
use Shape\Shape;
use Resizeable\Resizeable;

include "../vendor/autoload.php";
class Circles extends Shape implements Resizeable
{
    public int|float $radius;
    public int|float $percent;
    const PERCENTAGE = 100;

    #[Pure] public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
        $this->percent = 100;
    }

    /**
     * @param float|int $percent
     */
    public function setPercent(float|int $percent): void
    {
        $this->percent = $percent;
    }

    public function getPercent(): float|int
    {
        return $this->percent;
    }

    public function resize(): float|int
    {
        return $this->radius += $this->radius * $this->percent/self::PERCENTAGE;
    }

}