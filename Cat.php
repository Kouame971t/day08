<?php
class Cat
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function meow(): void
    {
        echo "Meow I am " . $this->name . "\n";
    }
}
