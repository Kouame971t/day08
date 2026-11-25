<?php
require_once __DIR__ . '/Person.php';

class Teacher extends Person
{
    public function greet(): void
    {
        echo "Hey, Why do you have 0 on your moulinette ?\n";
    }
}
