<?php
require_once __DIR__ . '/Shape.php';

class Square extends Shape
{
    public int|float $size;

    public function __construct(int|float $size = 0)
    {
        $this->size = $size;
    }

    public function getArea(): int|float
    {
        return $this->size * $this->size;
    }
}
