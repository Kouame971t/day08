<?php
require_once __DIR__ . '/Vehicle.php';

class Car extends Vehicle
{
    public string $brand;

    public function __construct(string $brand = "")
    {
        $this->brand = $brand;
    }

    public function move(): void
    {
        parent::move();
        echo "I am speed\n";
    }

    public function describe(): string
    {
        return "Vehicle made by " . $this->brand;
    }
}
