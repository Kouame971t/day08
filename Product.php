<?php
class Product
{
    private string $name;
    private int|float $price;

    public function __construct(string $name, int|float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString(): string
    {
        return "Product: " . $this->name . ", Price: " . $this->price . "€\n";
    }
}
