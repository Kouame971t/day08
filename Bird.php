<?php
require_once __DIR__ . '/CanFly.php';

class Bird implements CanFly
{
    public function fly(): void
    {
        echo "I can fly !\n";
    }
}
