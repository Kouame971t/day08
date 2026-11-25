<?php
require_once __DIR__ . '/Car.php';

class CarFactory
{
    public static function build(string $brand): Car
    {
        return new Car($brand);
    }
}
