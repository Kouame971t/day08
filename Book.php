<?php
require_once __DIR__ . '/Author.php';

class Book
{
    private Author $author;
    private string $title;

    public function __construct(Author $author, string $title = "")
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function describe(): void
    {
        echo "This book is written by " . $this->author->name . "\n";
    }
}
