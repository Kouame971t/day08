<?php
require_once __DIR__ . '/Person.php';

class Student extends Person
{
    public function greet(): void
    {
        echo "Hello, I can't wait to learn OOP !\n";
    }
}
