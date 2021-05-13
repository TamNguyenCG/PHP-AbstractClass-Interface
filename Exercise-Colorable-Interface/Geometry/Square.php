<?php


namespace Colorable;

use JetBrains\PhpStorm\Pure;

class Square extends Shape implements Colorable
{
    public int $sides;
    #[Pure] public function __construct(string $name, int $sides)
    {
        parent::__construct($name);
        $this->sides = $sides;
    }

    /**
     * @return int
     */
    public function getSide(): int
    {
        return $this->sides;
    }

    public function howToColor(): string
    {
        return "Color all four sides";
    }
}