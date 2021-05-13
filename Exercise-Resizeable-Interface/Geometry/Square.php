<?php

namespace Resize;

class Square extends Rectangle implements Resizeable
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

}
