<?php
class Dog
{
    public string $name;

    public function __construct(string $name = "")
    {
        $this->name = $name;
    }

    public function bark(): void
    {
        echo "Waf I am " . $this->name . "\n";
    }
}
